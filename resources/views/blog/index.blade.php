<x-guest-layout>
    {{-- Si tiene autorización mostrar botón de crear nuevo artículo --}}
    @auth
        <div class="shadow-sm mx-28 mb-4 pb-4" role="group">
            <x-buttons.index href="{{ route('artigos.create') }}">
                {{ __('Novo artigo') }}
            </x-buttons.index>
        </div>
    @endauth
    {{-- Mostrar los artículos --}}
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
                <div class="">
                    {{ __('Publicado ') }}{{ $artigo->data_publicacion->diffForHumans() }}
                </div>
            </div>
            <div class="">
                <x-blog.list-tags :etiquetas="$artigo->etiquetas" />
            </div>
        </div>
    @endforeach
    {{-- Paginación --}}
    <div class="">
        {{ $artigos->links() }}
    </div>
</x-guest-layout>
