<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use HasUuids, SoftDeletes, HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_active',
        'type'
    ];
}
