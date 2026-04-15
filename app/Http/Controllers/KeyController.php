<?php
namespace App\Http\Controllers;

class KeyController extends Controller
{

	public function showKey()
	{


		return view('key', ['arr' => ['Ksenia', 18, 20000]]);
	}
}
?>