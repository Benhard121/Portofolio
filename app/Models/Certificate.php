<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organization',
        'description',
        'category',
        'thumbnail',
        'issued_at',
        'expires_at',
        'credential_url',
    ];

    protected $casts = [
        'issued_at' => 'date',
        'expires_at' => 'date',
    ];
}

