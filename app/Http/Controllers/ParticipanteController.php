<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Evento;
use App\Http\Requests\ParticipanteRequest;

/**
 * Class ParticipanteController
 * @package App\Http\Controllers
 */
class ParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participantes = Participante::paginate();

        return view('participante.index', compact('participantes'))
            ->with('i', (request()->input('page', 1) - 1) * $participantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $participante = new Participante();
        $eventos = Evento::all();
        return view('participante.create', compact('participante', 'eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ParticipanteRequest $request)
    {
        Participante::create($request->validated());

        return redirect()->route('participantes.index')
            ->with('success', 'Participante created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $participante = Participante::find($id);

        return view('participante.show', compact('participante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $participante = Participante::find($id);
        $eventos = Evento::all();
        return view('participante.edit', compact('participante', 'eventos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ParticipanteRequest $request, Participante $participante)
    {
        $participante->update($request->validated());

        return redirect()->route('participantes.index')
            ->with('success', 'Participante updated successfully');
    }

    public function destroy($id)
    {
        Participante::find($id)->delete();

        return redirect()->route('participantes.index')
            ->with('success', 'Participante deleted successfully');
    }
}
