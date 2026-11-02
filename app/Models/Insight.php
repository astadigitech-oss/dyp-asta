<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insight extends Model
{
    use SoftDeletes, HasUuids, HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'is_active',
        'date',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
