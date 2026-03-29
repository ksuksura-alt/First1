<?php
<ul>
    @foreach($strings as $key => $value)
        <li>Номер: {{ $key + 1 }} - Значение: {{ $value }}</li>
    @endforeach
</ul>
