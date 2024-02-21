<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsTo;

/**
 * @method static find(int $int)
 */
class NewsMuseum extends Model
{
    use HasFactory;


    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'image_url',
        'date',
        'content_uz',
        'content_ru',
        'content_en',
        'order',
        'status',
    ];


    protected $casts = [
        'id' => 'integer',
        'status' => 'boolean',
        'date' => 'date:Y-m-d'
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'title_uz ');
    }
}
