<?php namespace App\Http\Controllers;
class MasiveController extends Controller
{
    public function show()
    {

	return view('test', ['arr' => [1, 2, 8, 9, 2]]);
	}
}
?>
10.	Пусть из действия в представление передается массив $location с ключами country, city. 
Выведите каждый элемент это массива в отдельном абзаце. Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась 'Россия', а если не задан город, то по умолчанию вывелась 'Москва'.