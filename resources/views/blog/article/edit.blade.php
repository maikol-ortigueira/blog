<x-guest-layout>
    <x-section title="Editar un artigo" description="Formulario para modificar os datos do artigo">
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ route('artigos.update', $artigo) }}" method="POST">
            @csrf
            @method('PATCH')
            <x-forms.input field="titulo" label="Título" :value="old('titulo', $artigo->titulo)" />
            <x-forms.textarea field="texto" label="Texto"> {{ old('texto', $artigo->texto) }} </x-forms.textarea>
            <x-tags :etiquetas="old('etiquetas', $artigo->etiquetas)" />
            <div class="mt-5 text-right">
                <x-buttons.primary>{{ __('Save') }}</x-buttons.primary>
            </div>
        </form>
    </x-section>
</x-guest-layout>
