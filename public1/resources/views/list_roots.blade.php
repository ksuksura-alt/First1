<?php
<ul>
    @foreach($numbers as $number)
        <li>{{ sqrt($number) }}</li>
    @endforeach
</ul>
