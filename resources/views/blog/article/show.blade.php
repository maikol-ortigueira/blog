<x-guest-layout>
    <div class="w-9/12 mx-auto rounded bg-white py-8 px-12">
        <div class="text-3xl mb-4 font-bold text-green-600">
            <h1>
                {{ $artigo->titulo }}
            </h1>
        </div>
        <div class="">
            {!! $artigo->texto !!}
        </div>
    </div>
</x-guest-layout>