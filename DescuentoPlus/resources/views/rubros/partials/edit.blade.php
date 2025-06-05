<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ isset($rubro) ? 'Editar Rubro' : 'Nuevo Rubro' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 bg-white p-6 shadow sm:rounded-lg">
            <form action="{{ isset($rubro) ? route('rubros.update', $rubro->id) : route('rubros.store') }}" method="POST">
                @csrf
                @if(isset($rubro))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion"
                        value="{{ old('descripcion', $rubro->descripcion ?? '') }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>

                <div class="mb-4">
                    <input type="hidden" name="is_active" value="0">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="is_active" id="is_active"
                            value="1"
                            {{ old('is_active', $rubro->is_active ?? false) ? 'checked' : '' }}
                            class="rounded">
                        <span class="ml-2 text-sm text-gray-600">Activo</span>
                    </label>
                </div>
                <div class="flex justify-between">
                    <a href="{{ route('rubros.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
