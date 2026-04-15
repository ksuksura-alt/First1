<?php
namespace App\Http\Controllers;

class inputController extends Controller

{
       public function showInput($input1, $input2, $input3)
    {
return view('inputs', [
    'input1' => 'Значение 1',
    'input2' => 'Значение 2',
    'input3' => 'Значение 3'
]);
}
?>