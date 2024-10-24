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

                <label for="materiales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige un
                    material</label>
                <select id="materiales" name="entrega_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($material as $materiales)
                        <option value="{{ $materiales->id }}" name="entega_id">
                            {{ $materiales->name }} {{ $materiales->descripcion }}</option>
                    @endforeach
                </select>


                <x-label value="Cantidad" />
                <x-input placeholder="cantidad del material" name="cantidad" />
                <x-label value="fecha" />
                <x-input type="date" name="fecha" />



                <div class="py-5">
                    <x-button type="submit">Guardar ot</x-button>
                </div>



            </form>

        </x-card>

    </x-container>

</x-app-layout>
