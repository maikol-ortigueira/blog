@props(['etiquetas'])
@php
    $etiquetas = $etiquetas->pluck('id')->toArray();
@endphp
<!-- Change the size of the container "max-w-full", ideally to w-1/6-->
<div class="container max-w-full mt-6 text-base font-sans">

    <div class="flex w-full border border-gray-400 shadow-lg overflow-hidden m-auto pb-4">
        <div class="justify-around flex flex-row items-baseline">
            <h1 class="underline text-lg mt-2 ml-3">Etiquetas</h1>
        </div>
        @foreach (\App\Models\Etiqueta::all() as $etiqueta)
            <label class="custom-label flex mt-2 ml-3">
                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                    <input type="checkbox" name="etiquetas[]" class="hidden" {{ in_array($etiqueta->id, $etiquetas) ? 'checked' : '' }} value="{{ $etiqueta->id }}">
                    <x-svgs.tags-check />
                </div>
                <span class="select-none"> {{ $etiqueta->nombre }}</span>
            </label>
        @endforeach
    </div>

</div>


<style>
    .custom-label input:checked+svg {
        display: block !important;
    }

</style>
