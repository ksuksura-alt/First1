<?php

namespace App\Http\Controllers;

class CityController extends Controller
{
    return view('city', [
    '$city' => 'Омск',
]);
}
9.	Пусть из действия в представление передается переменная $city. Выведите в представлении названия города из этой переменной. Если же город не передан - пусть по умолчанию выведется город 'Москва'.