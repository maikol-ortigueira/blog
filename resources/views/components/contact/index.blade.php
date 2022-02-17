<x-guest-layout>
    <x-section submit="contact">
        <x-slot name="title">
            {{ __('Contact') }}
        </x-slot>

        <x-slot name="description">
            {{ __('If you wan\'t to contact us fill the next form.') }}
        </x-slot>

        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <form action="{{ route('contacto.store') }}" method="post">
            @csrf
            @method('PUT')
            <div class="md:grid md:grid-cols-2 md:gap-6">
                <x-forms.input field="nome" label="{{ __('Name') }}" required />
                <x-forms.input field="email" label="{{ __('Email') }}" required />
            </div>
            <div class="md:mt-3">
                <x-forms.input field="asunto" label="{{ __('Subject') }}" />
            </div>
            <div class="md:mt-3">
                <x-forms.textarea label="{{ __('Your message') }}" field="mensaxe" required />
            </div>
            <div class="mt-10 text-right">
                <x-buttons.index>
                    <x-svgs.check-circle />
                    {{ __('Submit') }}
                </x-buttons.index> 
            </div>
        </form>
    </x-section>
</x-guest-layout>
