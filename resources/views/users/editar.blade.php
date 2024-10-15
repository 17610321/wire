<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edición de atributos') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta sección podras editar los atributos de los usuarios</span>
        </div>


        <form method="POST" action="{{ route('usuarios.update', $usuario) }}">
            @csrf
            @method('put')




            <x-label value="Nombre" />
            <x-input placeholder="Nombre" name="name" value="{{ $usuario->name }}" />
            <x-label value="Apellidos" />
            <x-input placeholder="Apellidos" name="apellidos" value="{{ $usuario->apellidos }}" />
            <x-label value="Numero de empleado" />
            <x-input placeholder="Número de empleado" name="empleado" value="{{ $usuario->empleado }}" />
            <x-label value="Email" />
            <x-input placeholder="Email" name="email" value="{{ $usuario->email }}" />
            <x-input type="hidden" name="password" value="{{ $usuario->password }}" />




            <label for="puestos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
            <select id="puestos" name="puesto"
                class="text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 block:font-medium dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>{{ $usuario->puesto }}</option>
                <option value="instalador">Técnico instalador</option>
                <option value="mantenimiento">Técnico mantenimiento</option>
                <option value="gerente">Gerente</option>

            </select>




            <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
            <select id="rol" name="rol"
                class="text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 block:font-medium dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>{{ $usuario->rol }}</option>
                <option value="admin">Administrador</option>
                <option value="user">User</option>

            </select>



            <x-label />
            <x-input type="hidden" name="id" value="{{ $usuario->id }}" />

            <div class="py-5">
                <x-button type="submit">Actualizar</x-button>
            </div>



        </form>



    </x-container>

</x-app-layout>
