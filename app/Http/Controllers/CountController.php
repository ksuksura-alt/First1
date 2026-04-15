<?php
namespace App\Http\Controllers;
class CountController extends Controller
{
    public function showCount()
    {

        return view('testik', ['arr' => [1, 2, 8, 9, 2]]);
    }
}
?>