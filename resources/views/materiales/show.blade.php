<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de materiales') }}
        </h2>

        <a href="{{ route('materiales.index') }}" type="submit"><x-button class="mt-5">Crear nuevo
                material</x-button> </a>
    </x-slot>


    <x-container class="py-12 ">

        @livewire('buscador')


    </x-container>

</x-app-layout>
