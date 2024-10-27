<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Materiales') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras editar los materiales de tu inventario</span>
        </div>


        <form method="POST" action="{{ route('materiales.update', $materiale) }}">
            @csrf
            @method('put')




            <x-label value="Sku" />
            <x-input placeholder="clave del material" name="sku" value="{{ $materiale->sku }}" />
            <x-input-error for="sku" />
            <x-label value="Nombre" />
            <x-input placeholder="Nombre del material" name="name" value="{{ $materiale->name }}" />
            <x-input-error for="name" />
            <x-label value="Descripcion" />
            <x-input placeholder="Descripcion del material" name="descripcion" value="{{ $materiale->descripcion }}" />
            <x-input-error for="descripcion" />
            <x-label />
            <x-label value="Stock" />
            <x-input placeholder="Stock del material" name="stock" value="{{ $materiale->stock }}" />
            <x-input-error for="stock" />
            <x-input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

            <div class="py-5">
                <x-button type="submit">Actualizar</x-button>
            </div>



        </form>



    </x-container>

</x-app-layout>
