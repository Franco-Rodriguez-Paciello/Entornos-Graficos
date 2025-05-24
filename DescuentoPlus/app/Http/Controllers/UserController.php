<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        
        $users = User::when($search, fn($q) =>
            $q->where('name', 'like', "%$search%")
              ->orWhere('email', 'like', "%$search%")
        )->paginate(10);

        return view('users.admin', compact('users', 'search'));
    }

    // Método para cargar los datos del usuario por ID
    public function edit($id)
    {
        $user = User::findOrFail($id); // Obtiene el usuario o muestra error 404 si no existe
        return view('users.edit', compact('user'));
    }

    // Método para actualizar el rol del usuario
    public function updateRole(User $user)
    {
        $user->role = $user->role === 'admin' ? 'user' : 'admin';
        $user->save();

        return back()->with('success', 'Rol actualizado');
    }

    // Método para activar/desactivar un usuario
    public function toggleActive(User $user)
    {
        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with('success', 'Estado actualizado');
    }

    // Método para eliminar un usuario por ID
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Encuentra el usuario o lanza un error 404

        // Opcionalmente, podrías agregar lógica para evitar que el administrador se elimine a sí mismo
        if (Auth::id() == $user->id) {
            return back()->with('error', 'No puedes eliminarte a ti mismo');
        }

        $user->delete();

        return back()->with('success', 'Usuario eliminado');
    }
}
