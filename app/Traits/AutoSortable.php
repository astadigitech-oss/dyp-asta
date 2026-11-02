<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait AutoSortable
{
    /**
     * Boot the trait and hook into Eloquent events.
     */
    protected static function bootAutoSortable(): void
    {
        // 1. KETIKA CREATE: Isi otomatis dengan angka selanjutnya, atau isi yang bolong
        static::creating(function ($model) {
            if (is_null($model->getAttribute($model->determineSortColumn()))) {
                $model->setAttribute(
                    $model->determineSortColumn(),
                    $model->getNextAvailableSortOrder()
                );
            }
        });

        // 2. KETIKA UPDATE: Jika kolom sort diubah manual, rapatkan sisanya
        static::updated(function ($model) {
            $sortColumn = $model->determineSortColumn();
            if ($model->wasChanged($sortColumn)) {
                $model->reorderSequence();
            }
        });

        // 3. KETIKA DELETE (Mendukung Soft Delete & Force Delete)
        static::deleted(function ($model) {
            // Karena menggunakan Soft Delete, record sebenarnya masih ada di DB (deleted_at terisi)
            // Kita rapatkan baris data LAIN yang masih aktif
            $model->reorderSequence();
        });

        // 4. KETIKA RESTORE (Jika soft delete dikembalikan)
        if (method_exists(static::class, 'restored')) {
            static::restored(function ($model) {
                // Saat di-restore, tempatkan di paling akhir atau rapatkan ulang
                $sortColumn = $model->determineSortColumn();
                $model->setAttribute($sortColumn, $model->getNextAvailableSortOrder());
                $model->saveQuietly();
                $model->reorderSequence();
            });
        }
    }

    /**
     * Menentukan nama kolom sort (default: 'sort')
     */
    public function determineSortColumn(): string
    {
        return $this->sortColumn ?? 'sort';
    }

    /**
     * Ambil query dasar yang peka terhadap Soft Delete dan Scope Grouping jika ada
     */
    protected function getSortQuery(): Builder
    {
        $query = static::query();

        // Jika model menggunakan Soft Deletes, pastikan kita HANYA menghitung data yang aktif
        if (method_exists($this, 'runSoftDelete')) {
            $query->whereNull($this->getDeletedAtColumn());
        }

        // Opsional: Jika pengurutan berdasarkan grup (misal: sort per user_id atau per category_id)
        if (method_exists($this, 'getSortGroupingColumns')) {
            foreach ($this->getSortGroupingColumns() as $column) {
                $query->where($column, $this->getAttribute($column));
            }
        }

        return $query;
    }

    /**
     * Mencari angka urutan pertama yang kosong (bolong), jika tidak ada ambil Max + 1
     */
    public function getNextAvailableSortOrder(): int
    {
        $sortColumn = $this->determineSortColumn();

        // Ambil semua urutan yang aktif saat ini, urutkan dari terkecil
        $existingOrders = $this->getSortQuery()
            ->pluck($sortColumn)
            ->toArray();

        // Cek apakah ada angka yang bolong mulai dari 1
        $nextOrder = 1;
        while (in_array($nextOrder, $existingOrders)) {
            $nextOrder++;
        }

        return $nextOrder;
    }

    /**
     * Menyusun ulang (merapatkan) seluruh urutan agar tidak ada yang bolong (1, 2, 3...)
     */
    public function reorderSequence(): void
    {
        $sortColumn = $this->determineSortColumn();

        // Ambil semua data yang aktif, urutkan berdasarkan nilai sort saat ini
        $records = $this->getSortQuery()
            ->orderBy($sortColumn)
            ->orderBy($this->getKeyName()) // Tie-breaker jika ada sort yang kembar
            ->get();

        // Update urutannya satu per satu secara massal tanpa memicu event updated kembali
        foreach ($records as $index => $record) {
            $newOrder = $index + 1;
            if ($record->getAttribute($sortColumn) !== $newOrder) {
                $record->newQuery()
                    ->where($this->getKeyName(), $record->getKey())
                    ->update([$sortColumn => $newOrder]);
            }
        }
    }
}
