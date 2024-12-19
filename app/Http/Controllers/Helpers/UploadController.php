<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function imageUpload($image, $location)
    {
        $random = rand(1000000000, 9999999999) . '_' . date('dmY') . '_img.jpeg';
        $destination = public_path($location);
        // $image->move($destination, $random);
        $img = substr($image, strpos($image, ",")+1);
        $file = base64_decode($img);
        file_put_contents(public_path($location).$random, $file);

        $url = $location . $random;

        return $url;
    }
}
