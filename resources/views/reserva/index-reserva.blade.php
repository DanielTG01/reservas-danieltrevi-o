<x-app-layout>
        <div class="mb-2 ms-4">
            <a href="{{ route('reserva.report') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> Inventario </a>
        </div>
<div class="ms-5 mr-8">
   <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre de cliente
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre de reserva
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha de reserva
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora de inicio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hora de fin
                    </th>
                </tr>
            </thead>
            <tbody>

    @foreach ($reservas as $reserva)
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-blue-500 whitespace-nowrap dark:text-white">
               <a href="{{ route('reserva.show', $reserva->id) }}">{{ $reserva->nombre_cliente }}</a> 
            </th>
            <td class="px-6 py-4">
                {{ $reserva->nombre_sala }}
            </td>
            <td class="px-6 py-4">
                {{ $reserva->fecha_reserva }}
            </td>
            <td class="px-6 py-4">
                {{ $reserva->hora_inicio }}
            </td>
            <td class="px-6 py-4">
                {{ $reserva->hora_fin }}
            </td>
            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
    </div>
    <div class="mt-2">
        {{ $reservas->links() }}
    </div>
    
</div>
        
        <br>
    </x-app-layout>