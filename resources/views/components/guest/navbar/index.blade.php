<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="{{ route('home') }}" class="flex">
            {{-- El logo está en un componente --}}
            <x-jet-application-logo />
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">Ferro</span>
        </a>
        {{-- Importar botón tipo hamburguesa para la versión responsive --}}
        <x-guest.navbar.responsive-button />
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                {{-- Items de menú --}}
                <x-guest.navbar.item text="{{ __('Home') }}" link="{{ route('home') }}" current="true" />
                <x-guest.navbar.item text="{{ __('¿Eres mayor?') }}" link="{{ route('filtro.edad') }}" />
                <x-guest.navbar.item text="{{ __('Blog') }}" link="{{ route('artigos.index') }}" />
                @auth
                    <x-guest.navbar.item text="{{ __('Tags') }}" link="{{ route('etiquetas.index') }}" />
                @endauth
                <x-guest.navbar.item text="{{ __('Contact') }}" link=" {{ route('contacto') }}" />
                {{-- Items condicionados a la autorización según tipo de usuario --}}
                @if (Route::has('login'))
                    @auth
                        <x-guest.navbar.item text="{{ __('Dashboard') }}" link="{{ url('/dashboard') }}" />
                    @else
                        <x-guest.navbar.item text="{{ __('Login') }}" link="{{ route('login') }}" />
                        @if (Route::has('register'))
                            <x-guest.navbar.item text="{{ __('Register') }}" link="{{ route('register') }}" />
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
