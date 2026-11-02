<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes, HasUuids, HasSlug;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'description',
        'image',
        'image_office',
        'is_active',
        'testimoni',
        'testimoni_show',
        'star',
    ];
}
