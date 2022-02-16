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

                <div class="inline-flex rounded-md shadow-sm justify-content-end mt-10" role="group">
                    <form action="{{ route('artigos.destroy', $artigo) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-buttons.group position="first">
                            <x-svgs.trash />
                            {{ __('Delete') }}
                        </x-buttons.group>
                    </form>
                    <x-buttons.group position="last" :button="false" link="{{ route('artigos.edit', $artigo) }}">
                        <x-svgs.pencil />
                        {{ __('Edit') }}
                    </x-buttons.group>
                </div>
            </div>
        @endauth
    </div>
</x-guest-layout>
