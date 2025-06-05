<section>
    <header>
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Adminitracion Rubros') }}
            </h2>

            {{-- <p class="mt-1 text-sm text-gray-600">
                {{ __("Update your account's profile information and email address.") }}
            </p> --}}
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    

    @if(session('success'))
    <div class="mb-4 text-green-600 font-semibold">
        {{ session('success') }}
    </div>

    @endif
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Descripción</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Activo</th>
                <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($rubros as $rubro)
                <tr>
                    <td class="px-4 py-2">{{ $rubro->descripcion }}</td>
                    <td class="px-4 py-2">{{ $rubro->is_active ? 'Sí' : 'No' }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('rubros.edit', $rubro->id) }}" class="text-blue-600 hover:underline">Editar</a>
                        <form action="{{ route('rubros.destroy', $rubro->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Estás seguro?')" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3" class="px-4 py-2 text-center">No hay rubros disponibles.</td></tr>
            @endforelse
        </tbody>
    </table>
</section>
