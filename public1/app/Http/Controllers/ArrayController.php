<?php
class ArrayController extends Controller
{
    public function showArray()
    {
        $numbers = [1, 2, 3, 4, 5]; // Пример массива
        return view('array_sum', ['numbers' => $numbers]);
    }
}
