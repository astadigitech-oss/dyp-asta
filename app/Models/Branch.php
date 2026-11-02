<?php

namespace App\Models;

use App\Traits\LimitActiveRecords;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use SoftDeletes, LimitActiveRecords, HasUuids, HasSlug;

    public function maxActive(): int
    {
        return 3;
    }

    protected $fillable = [
        'name',
        'slug',
        'address',
        'email',
        'phone',
        'is_active'
    ];
}
