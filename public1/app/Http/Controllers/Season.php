<?php
class SeasonController extends Controller
{
    public function showSeason()
    {
        $month = 12; // Пример значения
        return view('season', ['month' => $month]);
    }
}
