<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Paciente;

class PacientesController extends Controller
{
    
    public function index()
    {
        $pacientes = paciente::all();
        return view('adm.pacientes.pacientes', ['pacientes' => $pacientes]); 
    }

    public function create()
    {
        return view('adm.pacientes.paciente_create');
    }


public function store(Request $request)
{
    
    $validatedData = $request->validate([
        'nome' => 'required|string|max:255',
        'data_nascimento' => 'required|date',
        'telefone' => 'required|string|max:255',
        'email' => 'nullable|email|max:255', 
    ]);

    
    $paciente = new Paciente();
    $paciente->nome = $validatedData['nome'];
    $paciente->data_nascimento = $validatedData['data_nascimento'];
    $paciente->telefone = $validatedData['telefone'];

    if (isset($validatedData['email'])) {
        $paciente->email = $validatedData['email'];
    }

    
    $paciente->save();



    return redirect()->route('pacientes.index');   

}

    public function show(string $id)
    {
        
    }

  
    public function edit(string $id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('adm.pacientes.paciente_edit', ['paciente' => $paciente]);
    }

  
    public function update(Request $request, $id)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'data_nascimento' => 'required|date',
        'telefone' => 'required|string|max:15',
        'email' => 'nullable|email|max:255',
    ]);

    $paciente = Paciente::findOrFail($id);
    $paciente->nome = $request->input('nome');
    $paciente->data_nascimento = $request->input('data_nascimento');
    $paciente->telefone = $request->input('telefone');
    $paciente->email = $request->input('email');
    $paciente->save();

    return redirect()->route('pacientes.index')->with('success', 'Paciente atualizado com sucesso!');
}

    public function destroy(string $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente excluído com sucesso!');
    }
}