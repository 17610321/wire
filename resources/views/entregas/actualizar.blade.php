<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Entrega de materiales') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta sección podrás actualizar el stock de esta entrega</span>
        </div>

        <x-card>
            <form method="POST">
                @csrf
                @method('PUT')







                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige un
                    empleado</label>
                <select id="countries" name="user_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="{{ $entregas }}" name="user_id"></option>

                </select>
                <x-input value="{{ $entregas }}" />

                <label for="materiales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige un
                    material</label>
                <select id="materiales" name="materiale_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    <option value="{{ $entregas }}" name="materiale_id">
                    </option>

                </select>




                <x-label value="Cantidad" />
                <x-input placeholder="Nombre del material" name="cantidad" />
                <x-label value="Fecha" />
                <x-input name="fecha" value="{{ $date }}" readonly />


                <div class="py-5">
                    <x-button type="submit">Guardar</x-button>
                </div>



            </form>

        </x-card>




    </x-container>

</x-app-layout>
