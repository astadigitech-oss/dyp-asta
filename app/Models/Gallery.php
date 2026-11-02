<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes, HasUuids, HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'date',
        'image',
        'is_active'
    ];

    public function galleryObjects()
    {
        return $this->hasMany(GalleryObject::class);
    }
}
