<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Revisa tu inventario') }}

            <br>
            <a href="{{ route('ordenes.create') }}" type="submit"><x-button class="mt-5">Agregar
                    material a la ot</x-button> </a>
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta sección podrás ver tus órdenes de trabajo {{ Auth::user()->name }} </span>

        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">



            <table class="table table-info table-striped">
                <thead>
                    <tr>

                        <th scope="col">Cliente</th>
                        <th scope="col">Material</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acción</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($ordenes as $orden)
                            <th scope="row">{{ $orden->cliente }}</th>
                            <td>{{ $orden->entrega->materiale->name }}</td>
                            <td>{{ $orden->entrega->materiale->descripcion }}</td>
                            <td>{{ $orden->cantidad }}</td>
                            <td> {{ $orden->fecha }}</td>
                            <td>
                                <form method="POST" action="{{ route('ordenes.destroy', $orden) }}">
                                    @csrf
                                    @method('delete')
                                    <x-buttonr type="submit">Eliminar</x-buttonr>


                                </form>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




        {{ $ordenes->links() }}

    </x-container>

</x-app-layout>
