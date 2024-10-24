<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Revisa tu inventario') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta sección podrás ver tus órdenes de trabajo {{ Auth::user()->name }} </span>

        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">



            <table class="table table-dark table-striped">
                <thead>
                    <tr>

                        <th scope="col">Cliente</th>
                        <th scope="col">Entrega</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acción</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($ordenes as $orden)
                            <th scope="row">{{ $orden->cliente }}</th>
                            <td>{{ $orden->entrega }}</td>
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






    </x-container>

</x-app-layout>
