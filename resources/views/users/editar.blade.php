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

            <x-label value="Puesto" />
            <x-input placeholder="Email" name="puesto" value="{{ $usuario->puesto }}" />
            <x-label value="Rol" />
            <x-input placeholder="Email" name="rol" value="{{ $usuario->rol }}" />
            <x-label />
            <x-input type="hidden" name="id" value="{{ $usuario->id }}" />

            <div class="py-5">
                <x-button type="submit">Actualizar</x-button>
            </div>



        </form>



    </x-container>

</x-app-layout>
