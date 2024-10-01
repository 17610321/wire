<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta seccion podras ver los usuarios registrados</span>
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
                            Apellidos
                        </th>
                        <th scope="col" class="px-6 py-3">
                            # Empleado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Puesto
                        </th>
                        <th scope="col" class="px-6 py-3">

                            Rol
                        </th>
                        <th scope="col" class="px-6 py-3">

                            Editar
                        </th>
                        <th scope="col" class="px-6 py-3">

                            Eliminar
                        </th>






                    </tr>
                </thead>
                <tbody>
                    <tr class="white:bg-gray-800">
                        @foreach ($usuario as $usuario)
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $usuario->id }}
                            </th>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $usuario->name }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $usuario->apellidos }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $usuario->empleado }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $usuario->puesto }}
                            </td>
                            <td scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $usuario->rol }}
                            </td>
                            <td>
                                <a href="{{ route('usuarios.edit', $usuario) }}" type="button">Editar
                                </a>


                            </td>
                            <td>

                                <form method="POST" action="{{ route('usuarios.destroy', $usuario) }}">
                                    @csrf
                                    @method('delete')
                                    <x-button type="submit">eliminar</x-button>


                                </form>
                            </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>


    </x-container>

</x-app-layout>
