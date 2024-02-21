<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static findOrFail(int $id)
 * @method static create(array $validatedData)
 */
class ImageGalleryMuseum extends Model
{
    use HasFactory;


    protected $fillable = [
        'image_url',
        'title_uz',
        'title_en',
        'title_ru',
        'gallery_museum_id',
        'status',
        'order',
    ];

    protected $casts = [
        'id'=> 'integer',
        'gallery_museum_id' => 'integer',
        'status' => 'boolean',
    ];


    public function image()
    {
        return $this->belongsTo(GalleryMuseum::class);
    }
}
