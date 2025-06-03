<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestión de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <form method="GET" action="{{ route('users.index') }}" class="mb-3">
                    <input type="text" name="search" placeholder="Buscar por nombre o email" value="{{ $search }}">
                    <button type="submit">Buscar</button>
                </form>

                @if (session('success'))
                    <div style="color: green">{{ session('success') }}</div>
                @endif

                <table class="min-w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Rol</th>
                            <th class="px-4 py-2">Estado</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border px-4 py-2">{{ $user->name }}</td>
                                <td class="border px-4 py-2">{{ $user->email }}</td>
                                <td class="border px-4 py-2">{{ $user->role }}</td>
                                <td class="border px-4 py-2">{{ $user->is_active ? 'Activo' : 'Inactivo' }}</td>
                                <td class="border px-4 py-2">
                                    <form method="POST" action="{{ route('users.updateRole', $user) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit">Cambiar Rol</button>
                                    </form>
                                    <form method="POST" action="{{ route('users.toggleActive', $user) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit">
                                            {{ $user->is_active ? 'Desactivar' : 'Activar' }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div>{{ $users->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
