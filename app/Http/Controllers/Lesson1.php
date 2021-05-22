<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;

class Lesson1 extends Controller
{
    public function index()
    {
        $img = Image::make('https://raw.githubusercontent.com/LLoadout/assets/master/LLoadout_tutorials.png');
        //return $img->response('jpg');

        // rotate the image and return a jpg to the browser
        //return $img->rotate(90)->response('jpg');

        // resize an image and return it to the browser
        //return $img->resize(300,400)->response('jpg');

        // resize the image to a width of 300 and constrain aspect ratio (auto height)
        //return $img->resize(200, null, function ($constraint) {
        //    $constraint->aspectRatio();
        //})->response('jpg');

        // prevent possible upsizing
        /*return $img->resize(null, 1000, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->response('jpg');*/

        //if you want to handle a file and save it somewhere you can
        //return $img->save(storage_path()."/lesson1/lesson1.jpg",80,'jpg');

        //if you want color consistency you can make all your logo's greyscale
        //return $img->greyscale()->response('jpg');

        //or maybe you want all your images to get some tint
        //return $img->colorize(-100, 0, 100)->response('jpg');

        // write text at position and change font with callback
        return $img->text($_GET['text'] ?? 'LESSON 1', 20, 40, function($font) {
            $font->file(storage_path().'/lesson1/Raleway-Medium.ttf');
            $font->size(30);
        })->response('jpg');
    }


}