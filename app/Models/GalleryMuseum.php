<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 * @method static truncate()
 * @method static find($id)
 */
class GalleryMuseum extends Model
{
    use HasFactory;


    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'date',
        'image_url',
    ];

    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
    ];



}
