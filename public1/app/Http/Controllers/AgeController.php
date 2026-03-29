<?php
class AgeController extends Controller
{
    public function showAge()
    {
        $age = 17; // Пример значения
        return view('age_check', ['age' => $age]);
    }
}
