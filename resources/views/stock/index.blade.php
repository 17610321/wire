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


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>

                        <th scope="col" class="px-6 py-3">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Guardar
                        </th>








                    </tr>
                </thead>
                <tbody>
                    <form method="POST" action="{{ route('stock.store') }}">
                        @csrf



                        <tr class="white:bg-gray-800">
                            @foreach ($material as $materiale)
                        </tr>
                        <tr>
                            <th>

                                <x-input placeholder="clave del material" name="materiale_id"
                                    value="{{ $materiale->id }}" readonly />
                            </th>

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <x-input placeholder="Nombre del material" name="name" value="{{ $materiale->name }}"
                                    disabled />
                            </th>
                            <th>


                                <x-input placeholder="Descripcion del material" name="descripcion"
                                    value="{{ $materiale->descripcion }}" disabled />
                            </th>
                            <th>
                                <x-input name="cantidad" />
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <x-input name="fecha" value="{{ $date }}" readonly />
                            </th>
                            <x-input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />



                            <th>
                                <div class="py-5">
                                    <x-button type="submit">Crear</x-button>
                                </div>
                            </th>
                            @endforeach
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>


    </x-container>

</x-app-layout>
