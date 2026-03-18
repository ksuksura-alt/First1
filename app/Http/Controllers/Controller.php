<?php

namespace App\Http\Controllers;

class Controller extends Controller
{
    public function show()
    {
        return "Страница пользователя";
    }

    public function all()
    {
        return "Список всех пользователей";
    }

    public function showByName($name)
    {
        return "Пользователь: " . $name;
    }

    public function showByFullName($surname, $name)
    {
        return "Пользователь: $surname $name";
    }
}
