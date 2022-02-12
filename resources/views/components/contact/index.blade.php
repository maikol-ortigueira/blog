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
                <input type="submit" value="{{ __('Submit') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            </div>
        </form>
    </x-section>
</x-guest-layout>
