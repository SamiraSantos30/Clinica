<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Http\Request;

class AgendamentoController extends Controller
=======
use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentosController extends Controller
>>>>>>> 3b20195 (Clinica)
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $agendamento = agendamento::all();
        return view('telas.agendamento', ['agendamento' => $agendamento]); 
=======
        $agendamentos = Agendamento::all();
        return view('telas.agendamento', ['agendamentos' => $agendamentos]); 
>>>>>>> 3b20195 (Clinica)
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3b20195 (Clinica)
