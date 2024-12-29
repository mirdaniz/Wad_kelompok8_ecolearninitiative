<?php

namespace App\Models;

use App\Models\Forum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'Subject',
        'Message',
    ];
}

