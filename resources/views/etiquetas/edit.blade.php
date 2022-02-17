{{-- controlamos la solicitud --}}
@if (Route::currentRouteName() == 'etiquetas.create')
    @php
        $isNew = true;
    @endphp
@else
    @php
        $isNew = false;
    @endphp
@endif
<x-guest-layout>
    <x-section title="Editar etiqueta" description="">
        <form action="{{ $isNew ? route('etiquetas.store') : route('etiquetas.update', $etiqueta) }}" method="post">
            @csrf
            @if ($isNew)
                @method('POST')
            @else
                @method('PATCH')
            @endif
            <x-forms.input label="{{ __('Tag name') }}" field="nombre" :value="$isNew ? '' : old('nombre', $etiqueta->nombre)"/>
            <x-buttons.group>
                <x-buttons.index href="{{ route('etiquetas.index') }}" position="first">
                    <x-svgs.backspace />
                    {{ __('Close') }}
                </x-buttons.index>
                @if (!$isNew)
                <form action="{{ route('etiquetas.destroy', $etiqueta) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <x-buttons.index>
                        <x-svgs.trash />
                        {{ __('Delete') }}
                    </x-buttons.index>
                </form>
                @endif
                <x-buttons.index position="last">
                    <x-svgs.save />
                    {{ __('Save') }}
                </x-buttons.index>
            </x-buttons.group>
        </form>
    </x-section>
</x-guest-layout>
