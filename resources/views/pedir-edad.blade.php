<x-guest-layout>
    <x-section title="Necesitas autorización" description="">
        <form action="/mayores" method="get">
            <x-forms.input label="{{ _('Cal é a túa idade??') }}" field="edad" placeholder="Anos"/>
            <div class="mt-6 text-right">
                <x-buttons.index>
                    <x-svgs.cog />
                    {{ __('Entrar') }}
                </x-buttons.index>
            </div>
        </form>
    </x-section>
</x-guest-layout>