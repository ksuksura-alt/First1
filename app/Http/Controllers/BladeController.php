<?php

namespace App\Http\Controllers;

class BladeController extends Controller
{
    public function user($name, $age, $salary)
    {
        return["Имя: $name Возраст: $age Зарплата: $salary"];
    }
    
    }
