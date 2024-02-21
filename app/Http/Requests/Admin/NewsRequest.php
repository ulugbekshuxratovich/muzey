<?php


namespace App\Http\Requests\Admin;


use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title_uz' => ['request', 'string'],
            'title_ru'=>['request', 'string'],
            'title_en'=>['request', 'string'],
            'image_url'=>['request', 'string'],

        ];
    }
}

