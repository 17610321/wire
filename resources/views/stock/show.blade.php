<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Stock') }}
        </h2>


    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras ver tu stock</span>
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
                            editar
                        </th>
                        <th scope="col" class="px-6 py-3">

                            eliminar
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
                                {{ $materiale->cantidad }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->materiale()->get() }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $materiale->descripcion }}
                            </td>
                            <td>
                                <a href="{{ route('stock.edit', $materiale) }}" type="button"><x-buttong>Editar
                                    </x-buttong> </a>


                            </td>
                            <td>

                                <form method="POST" action="{{ route('stock.destroy', $materiale) }}">
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


    </x-container>

</x-app-layout>
