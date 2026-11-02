<?php

namespace App\Models;

use App\Traits\HasSlug;
use App\Traits\LimitActiveRecords;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes, LimitActiveRecords, HasUuids, HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'is_active',
    ];
}
