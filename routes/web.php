<?php

use Illuminate\Support\Facades\Route;



// Задание 1
Route::get('/test', function () { //выводилось какое-нибудь сообщение. №1
    return 'Тест';
});

// Задание 2
Route::get('/dir/test', function () {
    return 'Содержимое директории test';
});

// Задание 3
Route::get('/user/{name}', function ($name) {
    return 'Пользователь: ' . $name;
});

// Задание 4
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return 'Пользователь: ' . $name . ' ' . $surname;
});

// Задание 5
Route::get('/city/{city?}', function ($city = 'omsk') {
    return 'Город: ' . $city;
});

// Задание 6
Route::get('/user/{id}', function ($id) {
    return 'ID пользователя: ' . $id;
})->where('id', '[0-9]+');

// Задание 7
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id . ', Имя: ' . $name;
})->where('id', '[0-9]+')->where('name', '[a-z]{3,}');

// Задание 8
Route::get('/posts/{date}', function ($date) {
    return 'Дата: ' . $date;
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

// Задание 9
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'Дата: ' . $year . '-' . $month . '-' . $day;
})->where('year', '[0-9]{4}')
    ->where('month', '[0-9]{2}')
    ->where('day', '[0-9]{2}');

// Задание 10
Route::get('/users/{order}', function ($order) {
    return 'Сортировка по: ' . $order;
})->where('order', '(name|surname|age)');

// Задание 11
Route::get('/city/{name}', function ($name) {
    return 'Город: ' . $name;
})->whereAlpha('name');


/*use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);
Route::get('/user/{name}', [UserController::class, 'showByName']);
Route::get('/user/{surname}/{name}', [UserController::class, 'showByFullName']);

$users = [
    'user1' => 'city1',
    'user2' => 'city2',
    'user3' => 'city3',
    'user4' => 'city4',
    'user5' => 'city5',
];

Route::get('/user/{username}', function($username) use ($users) {
    if (array_key_exists($username, $users)) {
        return "Город пользователя: " . $users[$username];
    } else {
        return "Пользователь не найден";
    }
});*/
