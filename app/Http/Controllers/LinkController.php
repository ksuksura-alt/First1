<?php namespace App\Http\Controllers;

class LinkController extends Controller{
         public function showLink($text)
    {
return view('link_example', [
    'text' => 'Перейти',
    'href' => '/home'
]);}