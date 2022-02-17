@props(['etiquetas'])
<div class="flex gap-2">
    @foreach ($etiquetas as $etiqueta)
        <a href="{{ route('artigos.index', ['etiqueta' => $etiqueta]) }}" class="border-green-300 border-b bg-green-700 rounded-xl px-2 text-white hover:bg-green-900">
            {{ $etiqueta->nombre }}
        </a>
    @endforeach
</div>
