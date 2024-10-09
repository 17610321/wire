<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de materiales') }}
        </h2>

        <a href="{{ route('materiales.index') }}" type="submit"><x-button class="mt-5">Crear nuevo
                material</x-button> </a>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras ver los materiales de tu inventario</span>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cantidad
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
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->id }}
                            </th>
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

                                <form method="POST" action="{{ route('materiales.destroy', $materiale) }}">
                                    @csrf
                                    @method('delete')
                                    <x-buttonr type="submit">eliminar</x-buttonr>


                                </form>
                            </td>

                            <td>
                                <div class="relative ms-3">
                                    <x-dropdown align="right" width="60">
                                        <x-slot name="trigger">
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                                    acciones

                                                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                    </svg>
                                                </button>
                                            </span>
                                        </x-slot>

                                        <x-slot name="content">
                                            <div class="w-60">


                                                <!-- Team Settings -->
                                                <x-dropdown-link href="{{ route('materiales.edit', $materiale) }}">
                                                    {{ __('Editar') }}
                                                </x-dropdown-link>


                                                <x-dropdown-link href="{{ route('stock.index') }}">
                                                    {{ __('Agregar stock') }}
                                                </x-dropdown-link>


                                            </div>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


    </x-container>

</x-app-layout>
