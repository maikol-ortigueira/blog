@props(['header', 'items'])
<div>
    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">{{ $header }}</h3>
    <ul>
        @foreach ($items as $item)
            <x-guest.footer.menu-item :item="$item" />
        @endforeach
    </ul>
</div>
