<?php namespace App\Http\Controllers;

class LinkController extends Controller{
return view('link_example', [
    'text' => 'Перейти',
    'href' => '/home'
]);}