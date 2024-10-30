<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de materiales') }}
        </h2>

        <a href="{{ route('materiales.index') }}" type="submit"><x-button class="mt-5">Crear nuevo
                material</x-button> </a>
    </x-slot>


    <x-container class="py-12 ">


        <form class="flex items-center max-w-sm mx-auto" action="{{ route('buscador.buscar') }}" method="GET">

            @method('GET')

            <div class="relative w-full">
                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                    </svg>
                </div>
                <input type="text" id="simple-search" name="buscar"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar material..." required />
            </div>
            <button type="submit"
                class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Buscar</span>
            </button>
        </form>







        <div class="py-10">
            <span>En esta sección podras ver los materiales de tu inventario</span>
        </div>




        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Sku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripcion
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>

                        <th scope="col" class="px-6 py-3">

                            eliminar
                        </th>
                        <th scope="col" class="px-6 py-3">

                            Acciones
                        </th>






                    </tr>
                </thead>
                <tbody>
                    <tr class="white:bg-gray-800">
                        @foreach ($material as $materiale)
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->sku }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->name }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->descripcion }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->stock }}
                            </td>

                            <td>



                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Eliminar
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Estás seguro de eliminar este registro?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>

                                                <form method="POST"
                                                    action="{{ route('materiales.destroy', $materiale) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                            <td>


                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Acciones
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="{{ route('materiales.edit', $materiale) }}">Editar</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('stock.index2', $materiale) }}">Ingresar
                                                stock</a></li>

                                    </ul>
                                </div>
                            </td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        {{ $material->links() }}



    </x-container>

</x-app-layout>
