 <?php
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
Route::get('/user-info', [UserController::class, 'showUserInfo']);

// Для второй задачи
Route::get('/styled-element', [Controller::class, 'showStyledElement']);

// Для третьей задачи
Route::get('/inputs', [InputController::class, 'showInputs']);

// Для четвертой задачи
Route::get('/styled-paragraph', [StyleController::class, 'showStyledParagraph']);

// Для пятой задачи
Route::get('/link', [LinkController::class, 'showLink']);

Route::get('/day_today', [DayController::class, 'showday_today']);*****

Route::get('/key', [KeyController::class, 'showKey']);*****

masive
?>
