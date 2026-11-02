<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, HasUuids, HasSlug;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function insights()
    {
        return $this->hasMany(Insight::class);
    }
}
