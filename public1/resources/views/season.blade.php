<?php
<!-- Определяем время года по номеру месяца -->
@if ($month >= 3 && $month <= 5)
    <p>Весна</p>
@elseif ($month >= 6 && $month <= 8)
    <p>Лето</p>
@elseif ($month >= 9 && $month <= 11)
    <p>Осень</p>
@elseif ($month === 12 || $month === 1 || $month === 2)
    <p>Зима</p>
@else
    <p>Неверный номер месяца</p>
@endif
