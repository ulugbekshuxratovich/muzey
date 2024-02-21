<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static truncate()
 * @method static create(array $array)
 */
class AboutMuseum extends Model
{
    use HasFactory;


    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'image_url',
        'sub_content_uz',
        'sub_content_ru',
        'sub_content_en',
        'content_uz',
        'content_ru',
        'content_en',
        'video_url',
    ];
}
