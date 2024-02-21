<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoMuseum extends Model
{
    use HasFactory;


    protected $fillable = [
        'video_url',
        'title',
        'date',
    ];

    protected $casts = [
        'id' => 'integer',
        'date' => 'date:Y-m-d'
    ];
}
