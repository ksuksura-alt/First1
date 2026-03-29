<?php
<!-- Работа с массивом чисел -->
@if (count($numbers) > 0)
    <?php 
        $sum = array_sum($numbers);
    ?>
    <p>Сумма элементов: {{ $sum }}</p>
@else
    <p>Массив пуст</p>
@endif
