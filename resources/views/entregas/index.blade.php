<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Entrega de materiales') }}
        </h2>
    </x-slot>


    <x-container class="py-12 ">

        <div class="py-10">
            <span>En esta sección podrá hacer las entregas de material a los empleados</span>
        </div>

        <x-card>
            <form method="POST" action="{{ route('entrega.store') }}">
                @csrf








                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige un
                    empleado</label>
                <select id="countries" name="user_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($user as $users)
                        <option value="{{ $users->id }}" name="user_id">{{ $users->name }}</option>
                    @endforeach
                </select>

                <label for="materiales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elige un
                    material</label>
                <select id="materiales" name="materiale_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($material as $materiales)
                        <option value="{{ $materiales->id }}" name="materiale_id">
                            {{ $materiales->name }} {{ $materiales->descripcion }}</option>
                    @endforeach
                </select>




                <x-label value="Cantidad" />
                <x-input placeholder="Cantidad del material" name="cantidad" />
                <x-input-error for="cantidad" />
                <x-label value="Fecha" />
                <x-input name="fecha" value="{{ $date }}" readonly />


                <div class="py-5">
                    <x-button type="submit">Entregar</x-button>
                </div>



            </form>

        </x-card>




    </x-container>

</x-app-layout>
