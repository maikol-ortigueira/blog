<x-guest-layout>
    <x-section title="Etiquetas" description="Lista de etiquetas para el Blog">
        <div class="flex gap-2">
            @foreach ($etiquetas as $item)
                <a href="{{ route('etiquetas.edit', $item) }}" class="text-white bg-green-500 hover:bg-green-700 px-2 pt-0.5 pb-1 rounded-lg">
                    {{ $item->nombre }}
                </a>
            @endforeach
        </div>
        <x-buttons.group>
            <x-buttons.index href="{{ route('etiquetas.create') }}" >
                <x-svgs.plus-circle />
                {{ __('New Tag') }}
            </x-buttons.index>
        </x-buttons.group>
    </x-section>
</x-guest-layout>
