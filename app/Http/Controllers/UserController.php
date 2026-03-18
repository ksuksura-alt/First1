<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show()
    {
        return["Страница пользователя"];
    }

    public function all()
    {
        return[ "Список всех пользователей"];
    }

    public function showByName($name)
    {
        return[ "Пользователь: " . $name];
    }

    public function showByFullName($surname, $name)
    {
        return[ "Пользователь: $surname $name"];
    }

    public function cite($username, $users):
    {
        $users = [
    'user1' => 'city1',
    'user2' => 'city2',
    'user3' => 'city3',
    'user4' => 'city4',
    'user5' => 'city5',];

        if (array_key_exists($username, $users)) {
        return "Город пользователя: " . $users[$username];
    } else {
        return "Пользователь не найден";
    }
    }
}