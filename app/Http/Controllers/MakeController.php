<?php

namespace App\Http\Controllers;

use App\models\Contato;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    public function index()
    {
        return view('telas.Make');
    }

    public function create()
    {
        return view('telas.Make');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome_contato' => 'required|string|max:255',
            'email_contato' => 'nullable|email|max:255',
            'data_contato' => 'required|date',
            'departamento_contato' => 'required|string|max:255',
            'tel_contato' => 'required|string|max:255',
            'mensagem_contato' => 'required|string|max:255',
        ]);

        // Criação do contato no banco
        Contato::create($validatedData);

        return redirect()->route('make.create')->with('success', 'Consulta marcada com sucesso!');
    }
}   
