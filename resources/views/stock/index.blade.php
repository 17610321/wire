<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ingresar materiales ') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras ingresar las cantidades a tu inventario</span>
        </div>












        <x-card>
            <form method="POST" action="{{ route('stock.store') }}">
                @csrf



                <x-label value="Id material" />
                <x-input placeholder="clave del material" name="materiale_id" value="{{ $mat->id }}" readonly />
                <x-label value="Nombre" />
                <x-input name="name" value="{{ materiale()->name }}" disabled />
                <x-label value="Descripción" />
                <x-input value="{{ materiale()->descripcion }}" disabled />
                <x-label value="cantidad" />
                <x-input placeholder="Ingrese cantidad" name="cantidad" />
                <x-label value="fecha" />

                <x-input name="fecha" value="{{ $date }}" readonly />



                <div class="py-5">
                    <x-button type="submit">Crear</x-button>
                </div>

            </form>

        </x-card>





    </x-container>

</x-app-layout>
