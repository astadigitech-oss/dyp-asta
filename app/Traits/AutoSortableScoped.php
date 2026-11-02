<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Exception;

trait AutoSortableScoped
{
    /**
     * Boot the AutoSortableScoped trait for the model.
     */
    protected static function bootAutoSortableScoped(): void
    {
        // Helper untuk memastikan method getSortScopeColumn() sudah dibuat di model
        $getScopeColumn = function ($model) {
            if (!method_exists($model, 'getSortScopeColumn')) {
                throw new Exception("Model " . get_class($model) . " harus mengimplementasikan method 'getSortScopeColumn()' untuk menggunakan AutoSortableScoped.");
            }
            return $model->getSortScopeColumn();
        };

        // 1. Otomatis isi nomor urut berdasarkan foreign key saat create
        static::creating(function ($model) use ($getScopeColumn) {
            if (empty($model->sort)) {
                $column = $getScopeColumn($model);

                // Ambil max sort khusus untuk foreign key yang sama
                $maxSort = static::query()
                    ->where($column, $model->$column)
                    ->max('sort');

                $model->sort = ($maxSort ?? 0) + 1;
            }
        });

        // 2. Geser urutan data lain ke atas saat data ini di-softdelete (hanya dalam grup yang sama)
        static::deleted(function ($model) use ($getScopeColumn) {
            if (!method_exists($model, 'isForceDeleting') || !$model->isForceDeleting()) {
                $column = $getScopeColumn($model);
                $deletedSort = $model->sort;

                // Kurangi -1 hanya untuk data yang satu group dan urutannya di atas data yang dihapus
                static::query()
                    ->where($column, $model->$column)
                    ->where('sort', '>', $deletedSort)
                    ->decrement('sort');
            }
        });

        // 3. Jika di-restore, taruh di urutan paling akhir di dalam grup relasi tersebut
        if (method_exists(static::class, 'restored')) {
            static::restored(function ($model) use ($getScopeColumn) {
                $column = $getScopeColumn($model);

                $maxSort = static::query()
                    ->where($column, $model->$column)
                    ->max('sort');

                $model->sort = ($maxSort ?? 0) + 1;
                $model->saveQuietly(); // Biar ga trigger event updating/saving
            });
        }
    }

    /**
     * Scope untuk mempermudah sorting saat query data
     */
    public function scopeSorted(Builder $query, string $direction = 'asc'): Builder
    {
        return $query->orderBy('sort', $direction);
    }
}
