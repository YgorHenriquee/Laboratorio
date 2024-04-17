<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Models\Responsavel;
use App\Models\Equipamento;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller {
        public function form() {
            $equipamentos = Equipamento::all();
            $responsaveis = Responsavel::all();
            $projetos = Projeto::all();
            $nome = Auth::user();
                
            return view('reservar')->with('equipamentos', $equipamentos)->with('responsaveis', $responsaveis)->with('projetos', $projetos)->with('nome', $nome->name);

        }

    public function agendar(Request $request) {
        // Lógica para agendar
    }
}
