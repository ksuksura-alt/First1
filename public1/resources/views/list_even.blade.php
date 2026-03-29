<?php
<ul>
    @foreach($numbers as $number)
        @if($number % 2 == 0)
            <li>{{ $number }}</li>
        @endif
    @endforeach
</ul>
