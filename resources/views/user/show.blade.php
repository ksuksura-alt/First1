<x-layout>
    <x-slot:title>
        {{ $title }}
        </x-slot>
        <div>
            Имя: {{ $name }}<br>
            Фамилия: {{ $surname }}<br>
            {{ $content }}
        </div>
</x-layout>