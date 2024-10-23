<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ordenes de trabajo') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podrás descargar el material utilizado en tus ordenes de trabajo</span>
        </div>

        <x-card>
            <form method="POST" action="{{ route('ordenes.store') }}">
                @csrf



                <x-label value="#Cliente" />
                <x-input placeholder="ingresa el número de contrato del cliente " name="cliente" />
                <x-label value="Sku" />
                <x-input placeholder="Sku del material" name="sku" />
                <x-label value="Nombre" />
                <x-input placeholder="Nombre del material" name="name" />
                <x-label value="Descripcion" />
                <x-input placeholder="Descripcion del material" name="descripcion" />
                <x-label value="Cantidad" />
                <x-input placeholder="cantidad del material" name="cantidad" />
                <x-label value="fecha" />
                <x-input type="date" />



                <div class="py-5">
                    <x-button type="submit">Crear</x-button>
                </div>



            </form>

        </x-card>

    </x-container>

</x-app-layout>
