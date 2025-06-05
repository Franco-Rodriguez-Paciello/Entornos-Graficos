<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rubros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('rubros.create') }}"
   class="bg-gray-300 text-black border border-black hover:bg-gray-100 font-bold py-2 px-4 rounded">
    + Agregar Rubro
</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                @include('rubros.partials.list')
            </div>
        </div>
    </div>
</x-app-layout>