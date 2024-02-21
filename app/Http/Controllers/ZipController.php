<?php

namespace App\Http\Controllers;


//use Illuminate\Http\File;
use ZipArchive;
use Illuminate\Support\Facades\File;

class ZipController extends Controller
{

    public function downloadZip() {
      $zip = new ZipArchive;

      $fileName = "download-file.zip";
      if ($zip->open($fileName,ZipArchive::CREATE)) {
          $files = File::files(public_path('files'));

          foreach ($files as $file) {
              $nameInZipFile = basename($file);

              $zip->addFile($file,$nameInZipFile);
          }
          $zip->close();
      }
      return response()->download($fileName);
    }

}

