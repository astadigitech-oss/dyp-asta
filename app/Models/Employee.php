<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\AutoSortable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes, HasUuids, HasSlug, AutoSortable;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'is_active',
        'position',
        'sort'
    ];
}
