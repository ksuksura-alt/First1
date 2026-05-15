<?php

namespace App\Http\Controllers;
use App\Posts10;

class Posts10Controller extends Controller
{
    public function show()
    {
    $posts10 = App\Posts10::where('id')
    ->orderBy('title')
    ->take(5)
    ->get();

    $posts10 = Posts10::find(1);
    }
}
