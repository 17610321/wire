<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Crea tus materiales') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras crear los materiales de tu inventario</span>
        </div>

        <x-card>
            <form method="POST" action="{{ route('materiales.store') }}">
                @csrf




                <x-label value="Sku" />
                <x-input placeholder="clave del material" name="sku" />
                <x-label value="Nombre" />
                <x-input placeholder="Nombre del material" name="name" />
                <x-label value="Descripcion" />
                <x-input placeholder="Descripcion del material" name="descripcion" />
                <x-label value="Stock" />
                <x-input placeholder="stock del material" name="stock" />

                <x-input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

                <div class="py-5">
                    <x-button type="submit">Crear</x-button>
                </div>



            </form>

        </x-card>

    </x-container>

</x-app-layout>
