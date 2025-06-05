<?php

namespace App\Http\Controllers;

use App\Models\Rubro;
use Illuminate\Http\Request;

class RubroController extends Controller
{
    public function index()
    {
        $rubros = Rubro::all();
        return view('rubros.index', compact('rubros'));
    }

    public function create()
    {
        return view('rubros.partials.edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);

        Rubro::create([
            'descripcion' => $request->descripcion,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('rubros.index')->with('success', 'Rubro creado correctamente.');
    }

    public function edit(Rubro $rubro)
    {
        return view('rubros.partials.edit', compact('rubro'));
    }

    public function update(Request $request, Rubro $rubro)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
            'is_active' => 'sometimes|boolean',
        ]);

        $rubro->update([
            'descripcion' => $request->descripcion,
            'is_active' => $request->input('is_active') == 1 ? 1 : 0,
        ]);

        return redirect()->route('rubros.index')->with('success', 'Rubro actualizado correctamente.');
    }

    public function destroy(Rubro $rubro)
    {
        $rubro->delete();
        return redirect()->route('rubros.index')->with('success', 'Rubro eliminado correctamente.');
    }
}
