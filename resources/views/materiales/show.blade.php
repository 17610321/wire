<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de materiales') }}
        </h2>

        <a href="{{ route('materiales.index') }}" type="submit"><x-button class="mt-5">Crear nuevo
                material</x-button> </a>
    </x-slot>


    <x-container class="py-12 ">

        @livewire('buscador')

        <div class="py-10">
            <span>En esta seccion podras ver los materiales de tu inventario</span>
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
