<?php


namespace App\Http\Filter;


class NewsFilter extends AbstractFilter
{
        public const TITLE_UZ = 'title_uz';
        public const TITLE_RU = 'title_ru';
        public const TITLE_EN = 'title_en';
        public const IMAGE_URL = 'image_url';

    protected function getCallbacks()
    {

    }
}
