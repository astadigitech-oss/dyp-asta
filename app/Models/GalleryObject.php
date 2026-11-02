<?php

namespace App\Models;

use App\Traits\AutoSortableScoped;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryObject extends Model
{
    use SoftDeletes, HasUuids, AutoSortableScoped;

    protected $fillable = [
        'gallery_id',
        'image',
        'sort',
    ];

    public function getSortScopeColumn(): string
    {
        return 'gallery_id';
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
