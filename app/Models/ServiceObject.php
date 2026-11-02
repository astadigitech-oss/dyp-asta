<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AutoSortableScoped;

class ServiceObject extends Model
{
    use SoftDeletes, HasUuids, AutoSortableScoped;

    protected $fillable = [
        'service_id',
        'image',
        'sort'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function getSortScopeColumn(): string
    {
        return 'service_id';
    }
}
