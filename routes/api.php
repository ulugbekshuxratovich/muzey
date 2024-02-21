<?php

use App\Http\Controllers\Admin\AboutMuseumController;
use App\Http\Controllers\GalleryMuseumController;
use App\Http\Controllers\ImageGalleryMuseumController;
use App\Http\Controllers\v1\Auth\AuthController;
use App\Http\Controllers\VideoMuseumController;
use App\Http\Controllers\ZipController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/zip-download', [ZipController::class, 'downloadZip']);

//Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResources([
        'about' => AboutMuseumController::class,
        'gallery' => GalleryMuseumController::class,
        'image' => ImageGalleryMuseumController::class,
        'video' => VideoMuseumController::class
    ]);
//});










































//
//Route::prefix('v1')->group(function () {
//    Route::post('login', [AuthController::class, 'login']);
//    Route::post('logout', [AuthController::class, "destroy"])->middleware("auth:sanctum")->name("logout");
//    Route::post('register', [AuthController::class, 'register']);
//});
