{{-- Esta plantilla es utilizada tanto para editar como para crear un nuevo artículo --}}
<x-guest-layout>
    {{-- controlamos la solicitud --}}
    @if (Route::currentRouteName() == 'artigos.create')
        @php
            $isNew = true;
        @endphp
    @else
        @php
            $isNew = false;
        @endphp
    @endif
    <x-section title="{{ $isNew ? 'Crear' : 'Editar' }} un artigo"
        description="Formulario para {{ $isNew ? 'crear' : 'modificar' }} os datos do artigo">
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ $isNew ? route('artigos.store') : route('artigos.update', $artigo) }}" method="POST">
            @csrf
            @if ($isNew)
                @method('POST')
            @else
                @method('PATCH')
            @endif
            <x-forms.input field="titulo" label="Título" :value="$isNew ? '' : old('etiquetas', $artigo->titulo)" />
            <x-forms.textarea field="texto" label="Texto">{{ $isNew ? '' : old('texto', $artigo->texto) }}</x-forms.textarea>
            <x-tags :etiquetas="$isNew ? 'null' : old('etiquetas', $artigo->etiquetas)" />
                <div class="text-right">
                    <x-buttons.group>
                        @if ($isNew)
                            <x-buttons.index position="first" href="{{ route('artigos.index') }}">
                                <x-svgs.backspace />
                                {{ __('Close') }}
                            </x-buttons.index>
                        @else
                            <x-buttons.index position="first" href="{{ route('artigos.show', $artigo) }}">
                                <x-svgs.backspace />
                                {{ __('Close') }}
                            </x-buttons.index>
                        @endif
                        <x-buttons.index position="last">
                            <x-svgs.save />
                            {{ __('Save') }}
                        </x-buttons.index>
                    </x-buttons.group>
                </div>
                <input type="hidden" name="user_id" value="{{ old('user_id', $user_id ?? auth()->user()->id) }}">
        </form>
    </x-section>
</x-guest-layout>
