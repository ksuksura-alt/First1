<?php namespace App\Http\Controllers;

class DayController extends Controller{

public function showDay()
    {

return view('day_today',[ echo date("d/m/Y")]);
    }
}
