<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutMuseumRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title_uz' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'url', 'max:255'],
            'sub_content_uz' => ['required', 'string'],
            'content_uz' => ['required', 'string'],
            'video_url' => ['nullable', 'url', 'max:255'],
        ];
    }
}
