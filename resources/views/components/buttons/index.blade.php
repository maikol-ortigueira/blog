@props(['position' => 'middle', 'href' => false, 'link', 'type'])
@if ($position === 'first')
    @php
        $posClass = 'rounded-l-md';
    @endphp
@elseif ($position === 'last')
    @php
        $posClass = 'rounded-r-md';
    @endphp
@else
    @php
        $posClass = '';
    @endphp
@endif
@if ($href)
<a href="{{ $link }}" @else <button type="{{ $type ?? 'submit'}}" @endif
        class="
        inline-flex
        items-center
        py-2
        px-4
        gap-2
        text-sm
        font-medium
        text-gray-900
        bg-transparent
        {{ $posClass }}
        border
        border-gray-900
        hover:bg-gray-900
        hover:text-white
        focus:z-10
        focus:ring-2
        focus:ring-gray-500
        focus:bg-gray-900
        focus:text-white
        dark:border-white
        dark:text-white
        dark:hover:text-white
        dark:hover:bg-gray-700
        dark:focus:bg-gray-700">

        {{ $slot }}
        @if ($href)
    </a>
@else
    </button>
@endif
