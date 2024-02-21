<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadersMuseum extends Model
{
    use HasFactory;


    protected $fillable = [
        'image_url',
        'name',
        'position',
        'phone',
        'ReceptionDays',
        'email',
        'title_uz',
        'title_ru',
        'title_en',
        'content_uz',
        'content_ru',
        'content_en',
    ];

    protected $casts = [
      'id' => 'integer',
        'phone'=> 'number',

    ];
}
