<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\NewsRequest;
use App\Models\NewsMuseum;
use Illuminate\Http\Request;
use function Symfony\Component\Yaml\dumpNull;

class NewsMuseumController extends Controller
{
    public function __invoke(NewsRequest $request)
    {
        $new = $request->validated();
        $news = NewsMuseum::query();

        if (isset($new['title_uz'])) {
            return $news->where('title_uz', 'ilike',$new['title_uz'])->get();
        }
        return $news->find('id');

    }
}
