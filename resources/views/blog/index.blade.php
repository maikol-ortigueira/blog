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
            <div class="">
                {{ __('Publicado ') }}{{ $artigo->data_publicacion->diffForHumans() }}
            </div>
        </div>
        <div class="">
            <x-blog.list-tags :etiquetas="$artigo->etiquetas" />
        </div>
    </div>
    @endforeach
    <div class="">
        {{ $artigos->links() }}
    </div>
</x-guest-layout>