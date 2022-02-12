@props(['link', 'text', 'current' => false])
@php
    // Diferenciamos el elemento de menú activo
    $class = $current
        ? 'text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 dark:text-white'
        :  ' text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700';
    $class = 'block py-2 pr-4 pl-3 ' . $class;
@endphp

<li>
    <a href="{{ $link }}" {{ $attributes->merge(['class' => $class]) }}>{{ $text }}</a>
</li>
