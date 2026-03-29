<?php
public function showList()
{
    $numbers = [1, 2, 3, 4, 5];
    return view('list', ['numbers' => $numbers]);
}

public function showSquares()
{
    $numbers = [1, 2, 3, 4, 5];
    return view('list_squares', ['numbers' => $numbers]);
}

public function showKeys()
{
    $strings = ['a' => 'яблоко', 'b' => 'банан', 'c' => 'вишня'];
    return view('list_keys', ['strings' => $strings]);
}
