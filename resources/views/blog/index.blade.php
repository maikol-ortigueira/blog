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
        <div class="">
            {{ (__('Publicado ')) }}{{ $artigo->data_publicacion->diffForHumans() }}
        </div>

        <div class="flex gap-2 mt-2">
            @foreach ($artigo->etiquetas as $etiqueta)
                <div class="bg-green-700 text-white px-3 rounded-2xl pb-1 pt-0 hover:bg-green-900">
                    <a href="{{ route('artigos.index', ['etiqueta' => $etiqueta]) }}">
                        {{ $etiqueta->nombre }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endforeach
</x-guest-layout>