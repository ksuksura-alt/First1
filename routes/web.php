 <?php
use App\Http\Controllers\UserController;

Route::get('/all/user', [UserController::class, 'all']);
Route::get('/user', [UserController::class, 'show']);
Route::get('{name}/user', [UserController::class, 'showByName']);
Route::get('/{surname}/{name}/user', [UserController::class, 'showByFullName']);


Route::get('/{username}/user', function($username) use ($users) {
    if (array_key_exists($username, $users)) {
        return "Город пользователя: " . $users[$username];
    } else {
        return "Пользователь не найден";
    }
});

?>
