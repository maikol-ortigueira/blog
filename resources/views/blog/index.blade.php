<x-guest-layout>
    @foreach ($artigos as $artigo)
    <div class="mb-4 mx-28">
        <div class="text-xl mb-2 text-green-700">
            <h2>
                <a href=" {{ route('artigos.show', $artigo) }} ">
                {{-- <a href="{{ route(artigos.show) }}"> --}}
                    {{ $artigo->titulo }}
                </a>
            </h2>
        </div>
        <div class="mb-8 leading-6">{!! Str::limit($artigo->texto, 150) !!}</div>
    </div>
    @endforeach
</x-guest-layout>