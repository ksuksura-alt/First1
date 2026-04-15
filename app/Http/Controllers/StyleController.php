<?php namespace App\Http\Controllers;

class StyleController extends Controller{

     public function showStyle()
    {
return view('styled_paragraph', ['cssStyle' => 'color: red;']);

}