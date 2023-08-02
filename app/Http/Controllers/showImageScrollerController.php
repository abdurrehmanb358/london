<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showImageScrollerController extends Controller
{
    public function showImageScroller()
    {
        // $images = ['hotal.png', 'another_image.png', 'third_image.png'];
        return view('layouts.holilday');
    }
}
