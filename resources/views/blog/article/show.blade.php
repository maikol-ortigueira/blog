<x-guest-layout>
    <div class="w-9/12 mx-auto rounded bg-white pt-8 pb-14 px-12">
        <div class="text-3xl mb-4 font-bold text-green-600">
            <h1>
                {{ $artigo->titulo }}
            </h1>
        </div>
        <div class="leading-7 space-y-4">
            {!! $artigo->texto !!}
        </div>
        @auth
            <div class="text-right">
                <x-buttons.group>
                    <form action="{{ route('artigos.destroy', $artigo) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-buttons.index position="first">
                            <x-svgs.trash />
                            {{ __('Delete') }}
                        </x-buttons.index>
                    </form>
                    <x-buttons.index position="last" href="true" link="{{ route('artigos.edit', $artigo) }}">
                        <x-svgs.pencil />
                        {{ __('Edit') }}
                    </x-buttons.index>
                </x-buttons.group>
            </div>
        @endauth
    </div>
</x-guest-layout>
