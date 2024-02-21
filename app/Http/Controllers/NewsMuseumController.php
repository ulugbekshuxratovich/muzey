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
        $news = $request->validated();
        $news = NewsMuseum::find(2);
        return $news;

    }
}
