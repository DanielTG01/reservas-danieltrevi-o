<x-app-layout>
    <!--product_number-->


    <p class="text-6xl text-blue-700 dark:text-white">Id de material:</p>
    <p class="text-4xl font-thin text-gray-900 dark:text-white">{{ $reserveDetail->id }}</p>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <p class="text-6xl text-blue-700 dark:text-white">Nombre Sala</p>
    <p class="text-4xl font-thin text-gray-900 dark:text-white">{{ $reserveDetail->nombre_sala }}</p>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <p class="text-6xl text-blue-700 dark:text-white">Horas</p>
    <p class="text-4xl font-thin text-gray-900 dark:text-white">{{ $reserveDetail->hora_inicio }}</p>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    <p class="text-6xl text-blue-700 dark:text-white">Nombre Cliente</p>
    <p class="text-4xl font-thin text-gray-900 dark:text-white">{{ $reserveDetail->nombre_cliente }}</p>
    <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
</x-app-layout>