<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domains extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'is_valid',
        'last_checked_at',
    ];

    protected $casts = [
        'last_checked_at' => 'datetime',
    ];
}
