<?php
namespace App\Http\Controllers;

class DayController extends Controller
{
    public function showDay()
    {
        $day = 7; // Пример значения
        return view('day', ['day' => $day]);
    }

    public function showWeekend()
    {
        $day = 6; // Пример значения
        return view('weekend', ['day' => $day]);
    }

    public function showWorkday()
    {
        $day = 5; // Пример значения
        return view('workday', ['day' => $day]);
    }
}
