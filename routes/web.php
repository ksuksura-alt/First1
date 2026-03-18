 <?php
use App\Http\Controllers\UserController;

Route::get('/user', [Controller::class, 'show']);
Route::get('/user/all', [Controller::class, 'all']);
Route::get('/user/{name}', [Controller::class, 'showByName']);
Route::get('/user/{surname}/{name}', [Controller::class, 'showByFullName']);

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
});

?>
