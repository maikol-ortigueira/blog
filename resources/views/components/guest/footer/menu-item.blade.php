@props(['item'])
<li class="mb-4">
    <a href="{{ $item['link'] }}" class="text-gray-600 hover:underline dark:text-gray-400" target="{{ $item['target'] ?? '_blank'}}">{{ $item['text'] }}</a>
</li>
