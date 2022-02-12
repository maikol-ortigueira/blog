@props(['title', 'description'])
<div {{ $attributes->merge(['class' => 'grid grid-cols-3 my-10 mx-auto md:gap-2 w-11/12 md:w-9/12 bg-white py-6 px-8 rounded shadow-lg']) }}>
    <div class="px-4 sm:px-0 col-span-3 md:col-span-1">
        <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>
        @if ($description)
            <p class="mt-1 text-sm text-gray-600">
                {{ $description }}
            </p>
        @endif
    </div>

    <div class="px-4 sm:px-0 mt-3 md:mt-0 col-span-3 md:col-span-2">
        {{ $slot }}
    </div>
</div>
