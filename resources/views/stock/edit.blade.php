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
            <form method="POST" action="{{ route('entrega.update', $entrega) }}">
                @csrf

                @method('put')

                <x-label value="User_id" />
                <x-input name="user_id" value="{{ $entrega->user->name }}" readonly />
                <x-label value="Material_id" />
                <x-input name="material_id" value="{{ $entrega->materiale->name }}" readonly />
                <x-label value="cantidad" />
                <x-input name="cantidad" value="{{ $entrega->cantidad }}" />
                <x-label value="fecha" />
                <x-input value="{{ $entrega->fecha }}" disabled />




                <div class="py-5">
                    <x-button type="submit">Crear</x-button>
                </div>

            </form>

        </x-card>





    </x-container>

</x-app-layout>
