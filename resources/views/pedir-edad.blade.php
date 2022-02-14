<x-guest-layout>
    <x-section title="Necesitas autorización" description="">
        <form action="/mayores" method="get">
            <x-forms.input label="{{ _('Cal é a túa idade??') }}" field="edad" placeholder="Anos"/>
            <div class="mt-6 text-right">
                <button type="submit" class="bg-blue-600 hover:bg-blue-900 text-white px-6 py-2 rounded-xl">Entrar</button>
            </div>
        </form>
    </x-section>
</x-guest-layout>