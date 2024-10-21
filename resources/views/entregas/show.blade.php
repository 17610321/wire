<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Entrega de materiales') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta sección podrás ver tus materiales {{ Auth::user()->name }} </span>

        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">



            <table class="table table-dark table-striped">
                <thead>
                    <tr>

                        <th scope="col">Material</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($entregas as $entrega)
                            <th scope="row">{{ $entrega->materiale->name }}</th>
                            <td>{{ $entrega->materiale->descripcion }}</td>
                            <td>{{ $entrega->cantidad }}</td>
                            <td> {{ $entrega->fecha }}</td>
                            <td>
                                <form method="POST" action="{{ route('entrega.destroy', $entrega) }}">
                                    @csrf
                                    @method('delete')
                                    <x-buttonr type="submit">eliminar</x-buttonr>


                                </form>
                            </td>
                            <td><x-buttong>Editar</x-buttong>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




        {{ $entregas->links() }}

    </x-container>

</x-app-layout>
