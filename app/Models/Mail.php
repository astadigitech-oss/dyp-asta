<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mail extends Model
{
    // Tanpa HasSlug: tabel mails tidak punya kolom slug
    use SoftDeletes, HasUuids;

    protected $fillable = [
        'name',
        'phone',
        'company',
        'email',
        'subject',
        'message',
        'date',
        'date_answer',
        'is_answered',
    ];
}
