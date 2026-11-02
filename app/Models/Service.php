<?php

namespace App\Models;

use App\Traits\AutoSortable;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes, HasUuids, HasSlug, AutoSortable;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'is_active',
        'sort',
    ];

    public function serviceObjects()
    {
        return $this->hasMany(ServiceObject::class);
    }
}
