<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_type',
        'description',
        'activity_time',
    ];

    // Pastikan activity_time otomatis di-cast ke Carbon instance
    protected $casts = [
        'activity_time' => 'datetime',
    ];
}
