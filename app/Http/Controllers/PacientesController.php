<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Paciente;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = paciente::all();
        return view('adm.pacientes.pacientes', ['pacientes' => $pacientes]); 
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adm.pacientes.paciente_create');
    }

    /**
     * Store a newly created resource in storage.
     */
/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Validação dos dados recebidos
    $validatedData = $request->validate([
        'nome' => 'required|string|max:255',
        'data_nascimento' => 'required|date',
        'telefone' => 'required|string|max:255',
        'email' => 'nullable|email|max:255', // Adiciona o campo email se necessário
    ]);

    // Criação de um novo paciente
    $paciente = new Paciente();
    $paciente->nome = $validatedData['nome'];
    $paciente->data_nascimento = $validatedData['data_nascimento'];
    $paciente->telefone = $validatedData['telefone'];

    if (isset($validatedData['email'])) {
        $paciente->email = $validatedData['email'];
    }

    // Salvar no banco de dados
    $paciente->save();

    // Retornar uma resposta ou redirecionar

    return redirect()->route('pacientes.create');

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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}