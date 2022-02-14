{{-- Recibo las propiedas de la clase GuestLayout en View/Components --}}
@props(['footer'])
<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
    <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com" target="_blank" class="flex items-center">
                <x-jet-application-logo />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
        </div>
        {{-- Los datos de los menús del footer se configuran en App\View\Components\GuestLayout --}}
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            @foreach ($footer['menus'] as $title => $items)
                <x-guest.footer.menu header="{{ __($title) }}" :items="$items" />
            @endforeach
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->year }} <a href="https://flowbite.com"
                target="_blank" class="hover:underline">Maikol Fustes</a>. {{__('All Rights Reserved')}}.
        </span>
        {{-- Sección de redes sociales --}}
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-blue-600 hover:text-gray-900 dark:hover:text-white">
                <x-svgs.facebook />
            </a>
            <a href="#" class="text-yellow-400 hover:text-gray-900 dark:hover:text-white">
                <x-svgs.instagram />
            </a>
            <a href="#" class="text-blue-400 hover:text-gray-900 dark:hover:text-white">
                <x-svgs.twitter />
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-svgs.github />
            </a>
        </div>
    </div>
</footer>
