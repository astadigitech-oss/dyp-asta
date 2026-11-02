<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait HasSlug
{
    /**
     * Boot trait untuk mendaftarkan Eloquent event.
     * Nama method harus diawali 'boot' + NamaTrait.
     */
    public static function bootHasSlug()
    {
        static::saving(function (Model $model) {
            // Ambil nama kolom sumber (default: 'name')
            $sourceColumn = method_exists($model, 'slugSource') ? $model->slugSource() : 'name';

            // Ambil nama kolom slug (default: 'slug')
            $slugColumn = method_exists($model, 'slugColumn') ? $model->slugColumn() : 'slug';

            // Jika kolom sumber ada nilainya dan kolom slug masih kosong/sedang diubah
            if ($model->$sourceColumn && (!$model->$slugColumn || $model->isDirty($sourceColumn))) {

                // Generate slug dasar
                $slug = Str::slug($model->$sourceColumn);

                // Pastikan slug unik (tidak tabrakan dengan record lain)
                $model->$slugColumn = static::makeUniqueSlug($model, $slug, $slugColumn);
            }
        });
    }

    /**
     * Logika untuk membuat slug unik (contoh: produk, produk-1, produk-2)
     */
    protected static function makeUniqueSlug(Model $model, string $slug, string $slugColumn): string
    {
        $originalSlug = $slug;
        $count = 1;

        // Bikin query dasar
        $query = static::query();

        // JIKA model menggunakan Soft Deletes, kita harus sertakan data yang terhapus (withTrashed)
        // supaya tidak duplikat dengan data sampah di DB.
        if (in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses_recursive($model))) {
            $query->withTrashed();
        }

        while (
            (clone $query)->where($slugColumn, $slug)
            ->where($model->getKeyName(), '!=', $model->id) // Exclude diri sendiri kalau lagi update
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }
}
