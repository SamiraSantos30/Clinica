<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;  

class LoginController extends Controller
{
   
    public function index()
    {
        return view('adm.login');  
    }

    
    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome' => 'required|string',
            'senha' => 'required|string',
        ]);
    
        // Tenta encontrar o admin no banco de dados
        $admin = Login::where('nome', $request->Login)->first();
    
        if ($admin) {
            // Verifica se a senha está no formato Bcrypt
            if (Hash::needsRehash($admin->senha)) {
                // Caso não esteja no formato Bcrypt, verifique manualmente
                if ($admin->senha == $request->senha) {
                    // A senha está no formato antigo (texto simples), atualiza para Bcrypt
                    $admin->senha = Hash::make($request->senha);
                    $admin->save();
    
                    // Loga o usuário e redireciona
                    session(['admin' => true]);
                    return redirect()->route('pacientes');
                }
            } elseif (Hash::check($request->senha, $admin->senha)) {
                // A senha já está em Bcrypt e é válida
                session(['admin' => true]);
                return redirect()->route('pacientes');
            }
        }
    
        // Se falhar, retorna erro
        return redirect()->back()->withErrors(['ERRO' => 'Nome de usuário ou senha incorretos.']);
    }
    
}    