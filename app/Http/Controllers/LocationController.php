	<?php namespace App\Http\Controllers;

class LocationController extends Controller{

    return view('test', ['location' => [1, 2, 8, 9, 2]]);
    }
    10.	Пусть из действия в представление передается массив $location с ключами country, city.
     Выведите каждый элемент это массива в отдельном абзаце. Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась 'Россия',
      а если не задан город, то по умолчанию вывелась 'Москва'.