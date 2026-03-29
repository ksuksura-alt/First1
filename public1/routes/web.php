<?php

use App\Http\Controllers\LabController;

Route::get('/user-info', [LabController::class, 'showUserInfo']);
Route::get('/day', 'DayController@showDay');
Route::get('/weekend', 'DayController@showWeekend');
Route::get('/workday', 'DayController@showWorkday');
Route::get('/season', 'SeasonController@showSeason');
Route::get('/check', 'AgeController@showAge');
Route::get('/array', 'ArrayController@showArray');

Route::get('/list', [ListController::class, 'showList']);
Route::get('/data-check', [DataController::class, 'showData']);
