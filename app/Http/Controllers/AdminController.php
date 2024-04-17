<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::select('id', 'name', 'email', 'saldo')->get();
        return view('administrador', compact('users'));
    }
    
    public function showEditPage($nome) {
        // Faça o que precisar com $nome, por exemplo, recuperar informações do banco de dados
    
        // Depois, passe a variável para a view
        return view('edit', ['nome' => $nome]);
    }

    public function listarutil() {
        $users = User::all();
        
        return view('listarutil', compact('users'));
    }
    

    
}
