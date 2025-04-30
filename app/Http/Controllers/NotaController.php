<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::latest()->get();
        return Inertia::render('Notas/Index', ['notas' => $notas]);
    }

    public function create()
    {
        return Inertia::render('Notas/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'contenido' => 'required',
        ]);

        Nota::create($validated);

        return redirect()->route('notas.index')->with('success', 'Nota guardada.');
    }

    public function edit(Nota $nota)
    {
        return Inertia::render('Notas/Edit', ['nota' => $nota]);
    }

    public function update(Request $request, Nota $nota)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'contenido' => 'required',
        ]);

        $nota->update($validated);

        return redirect()->route('notas.index')->with('success', 'Nota actualizada.');
    }
}
