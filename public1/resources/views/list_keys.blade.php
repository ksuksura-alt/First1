<?php
<ul>
    @foreach($strings as $key => $value)
        <li>Ключ: {{ $key }} - Значение: {{ $value }}</li>
    @endforeach
</ul>
