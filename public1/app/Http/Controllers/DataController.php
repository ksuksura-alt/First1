<?php
public function showData()
{
    $data = [1, 2, 3]; // или $data = 42;
    return view('data_check', ['data' => $data]);
}
