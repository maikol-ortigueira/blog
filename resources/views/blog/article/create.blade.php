<x-guest-layout>
    <x-section title="Editar un artigo" description="Formulario para modificar os datos do artigo" >
        <form action="{{ route('artigos.update') }}" method="post">
            @method('put')
            <x-forms.input field="titulo" name="Título" />
        </form>
    </x-section>
</x-guest-layout>