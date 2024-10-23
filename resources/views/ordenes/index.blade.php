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
                <label for="materiales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige un
                    material</label>
                <select id="materiales" name="materiale_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($material as $materiales)
                        <option value="{{ $materiales->id }}" name="materiale_id">
                            {{ $materiales->name }} {{ $materiales->descripcion }}</option>
                    @endforeach
                </select>

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
