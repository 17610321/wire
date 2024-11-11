<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Revisa tu inventario') }}
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
                        <th scope="col">Empleado</th>
                        <th scope="col">Material</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acción</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($entregas as $entrega)
                            <td>{{ $entrega->empleado }}</td>
                            <th scope="row">{{ $entrega->name }}</th>
                            <td>{{ $entrega->descripcion }}</td>
                            <td>{{ $entrega->cantidad }}</td>
                            <td> {{ $entrega->fecha }}</td>


                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleDev">
                                    Devolución
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleDev" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <div class="mx-auto modal-body">



                                                <form method="POST"
                                                    action="{{ route('entrega.destroy', $entrega->id) }}">
                                                    @csrf
                                                    @method('delete')




                                                    <x-label value="¿Estás seguro de hacer la devolución?" />

                                            </div>
                                            <div class="mx-auto modal-footer">
                                                <button type="submit" class="btn btn-success"
                                                    data-bs-dismiss="modal">Devolver</button>

                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Cerrar</button>





                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




        {{ $entregas->links() }}

    </x-container>

</x-app-layout>
