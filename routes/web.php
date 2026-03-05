<?php

use Illuminate\Support\Facades\Route;
/*  Route::get('/', function () {
		return 'главная страница сайта';
	});
	
    Route::get('/post/{id}', function ($id) {
		return 'пост' .$id;
	})->where('id','[0-9]+');
	
	Route::get('/post/{slug}/{id}', function ($slug, $id) {
		return 'пост ' . $slug . ' ' . $id;
	})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');

	Route::get('/post/1', function () {
		return 'первый пост';
	});

	Route::get('/post/9', function () { //Ограничения можно накладывать на несколько параметров
		return 'Девятый пост';
	});

	Route::get('/post/{id}', function ($id) { //метод ограничивает параметр только цифрами
		
	})->whereNumber('id');

	Route::get('/post/{slug}', function ($slug) { //только буквами
		
	})->whereAlpha('slug');

	Route::get('/post/{slug}', function ($slug) { //цифрами и буквами
		
	})->whereAlphaNumeric('slug');

*/
?>

<?php
Route::get('/test', function () { //выводилось какое-нибудь сообщение. №1
	return 'Тест';
});

Route::get('/dir/test ', function () { //выводилось какое-нибудь сообщение. №2
	return 'Директория: тест';
});

Route::get('/user/{name}', function ($name) { //вместо :name может быть любая строка. №3

})->whereAlpha('slug');

Route::get('/post/{surname}/{name}', function ($surname, $name) { //параметры задают имя и фамилию юзера. №4
	return 'Фамилия: ' . $surname . 'Имя:' . $name;
})->where('$surname')->where('$name');

Route::get('/city/{city?}', function ($city = "Омск") { //город был необязательным параметром и по умолчанию имел значение omsk. №5
	return 'Город' . $city;
});

Route::get('/user/{id}', function ($id) { //маршрут вида /user/:id, где вместо :id должно быть число. №6
	return 'пост ' . $id;
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name},', function ($surname, $name) { //параметры задают имя и фамилию юзера. №7
	return 'Фамилия: ' . $id . 'Имя:' . $name;
})->where('name', '[a-z3-9_-]+')->where('id', '[0-9]+');

Route::get('/{year}/{month}/{day},', function ($year, $month, $day) { //№8
	return 'Год: ' . $year . 'месяц:' . $month . 'день:' . $day;
})->where('year', '[0-9_-]+')->where('month', '[0-12]+')->where('day', '[0-9]+');
?>