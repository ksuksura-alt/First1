<?php
namespace App\Http\Controllers;

class inputController extends Controller

{
return view('inputs', [
    'input1' => 'Значение 1',
    'input2' => 'Значение 2',
    'input3' => 'Значение 3'
]);
}
?>