<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Lista de materiales') }}
        </h2>

    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras ver los movimientos del stock</span>
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
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Cantidad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            fecha
                        </th>


                        <th scope="col" class="px-6 py-3">

                            eliminar
                        </th>






                    </tr>
                </thead>
                <tbody>
                    <tr class="white:bg-gray-800">
                        @foreach ($stock as $stocks)
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $stocks->materiale_id }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $stocks->Materiale()->get('name') }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $stocks->Materiale()->get('descripcion') }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $stocks->cantidad }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $stocks->fecha }}
                            </td>


                            <td>

                                <form method="POST" action="{{ route('stock.destroy', $stock) }}">
                                    @csrf
                                    @method('delete')
                                    <x-buttonr type="submit">eliminar</x-buttonr>


                                </form>
                            </td>



                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

        {{ $stock->links() }}
    </x-container>

</x-app-layout>
