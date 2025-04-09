<?php

namespace App\Http\Controllers;

use App\Models\Acta;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class ActaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actas = Acta::latest()->get();
        return Inertia::render('Actas/Index', [
            'actas' => $actas,
        ]);
    }
    
    public function create()
    {
        return Inertia::render('Actas/Create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'banco' => 'required|string',
            'anio' => 'required|string',
            'referencia' => 'required|string',
            'archivo' => 'required|file|mimes:pdf',
        ]);
    
        $path = $request->file('archivo')->store('actas', 'public');
    
        Acta::create([
            'banco' => $request->banco,
            'anio' => $request->anio,
            'referencia' => $request->referencia,
            'archivo' => $path,
        ]);
    
        return redirect()->route('actas.index')->with('success', 'Acta subida correctamente.');
    
    }
}