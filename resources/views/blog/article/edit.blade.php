<x-guest-layout>
    @if (Route::currentRouteName() == 'artigos.create')
        @php
            $isNew = true;
        @endphp
    @else
        @php
            $isNew = false;
        @endphp
    @endif
    <x-section title="{{ $isNew ? 'Crear' : 'Editar' }} un artigo" description="Formulario para {{ $isNew ? 'crear' : 'modificar'}} os datos do artigo">
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ $isNew ? route('artigos.store', $artigo) : route('artigos.update', $artigo) }}"
            method="POST">
            @csrf
            @if ($isNew)
                @method('PUT')
            @else
                @method('PATCH')
            @endif
            <x-forms.input field="titulo" label="Título" :value="old('titulo', $artigo->titulo)" />
            <x-forms.textarea field="texto" label="Texto"> {{ old('texto', $artigo->texto) }} </x-forms.textarea>
            <x-tags :etiquetas="old('etiquetas', $artigo->etiquetas)" />
            <div class="text-right">
                <div class="inline-flex rounded-md shadow-sm justify-content-end mt-10" role="group">
                    @if ($isNew)
                        <x-buttons.group :button="false" position="first" link="{{ route('artigos.index') }}">
                            <x-svgs.backspace />
                            {{ __('Close') }}
                        </x-buttons.group>
                    @else
                        <x-buttons.group :button="false" position="first" link="{{ route('artigos.show', $artigo) }}">
                            <x-svgs.backspace />
                            {{ __('Close') }}
                        </x-buttons.group>
                    @endif
                    <x-buttons.group position="last">
                        <x-svgs.save />
                        {{ __('Save') }}
                    </x-buttons.group>
                </div>
            </div>
        </form>
    </x-section>
</x-guest-layout>
