<?php

namespace App\Http\Controllers;

abstract class Controller
{
    return view('user_info', [
    'name' => 'Иван',
    'age' => 25,
    'salary' => 50000
]);
}