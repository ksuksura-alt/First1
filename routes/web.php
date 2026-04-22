<?php
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\DayController;

Route::get('/all/user', [UserController::class, 'all']);
Route::get('/user', [UserController::class, 'show']);
Route::get('{name}/user', [UserController::class, 'showByName']);
Route::get('/{surname}/{name}/user', [UserController::class, 'showByFullName']);
Route::get('/season', 'SeasonController@showSeason');
Route::get('/check', 'AgeController@showAge');
Route::get('/array', 'ArrayController@showArray');

Route::get('/list', [ListController::class, 'showList']);

Route::get('/{name}/{age}/{salary}/user', [BladeController::class, 'user']);
//laba5
// Для первой задачи
Route::get('/user-info', [UserController::class, 'show']);

// Для второй задачи
Route::get('/styled-element', [Controller::class, 'showStyledElement']);

// Для третьей задачи
Route::get('/inputs', [InputController::class, 'showInput']);

// Для четвертой задачи
Route::get('/styled-paragraph', [StyleController::class, 'showStyle']);

// Для пятой задачи
Route::get('/link', [LinkController::class, 'showLink']);

// Для шестой задачи
Route::get('/day', [DayController::class, 'showDay']);

// Для седьмой задачи
Route::get('/key', [KeyController::class, 'showKey']);

//Для восьмой задачи
Route::get('/key', [CountController::class, 'showCount']);

//Для девятой задачи
Route::get('/key', [CityController::class, 'showCity']);

//Для десятой задачи
Route::get('/key', [LocationController::class, 'showLocation']);
    ?>