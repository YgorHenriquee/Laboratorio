<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use Request;
use App\Models\Reserva;
use App\Models\Equipamento;
use App\Models\Projeto;
use App\Models\Responsavel;
use Illuminate\Support\Facades\Auth;

class FormularioController extends Controller
{
   
    public function showEquipamentosSelection()
    {
    $equipamentos = Equipamento::all();

    
    return view('reservar', ['equipamentos' => $equipamentos]);
        
    }
    public function index()
{
    $equipamentos = Equipamento::all(); // ou qualquer lógica para obter os equipamentos
    return view('equipaments', ['equipamentos' => $equipamentos]);
    
}
public function index1()
{
    $equipamentos = Equipamento::all(); // ou qualquer lógica para obter os equipamentos
    return view('adminEquip', ['equipamentos' => $equipamentos]);
    
}
public function listarPorNome($nome)
{
    $reservas = Reserva::where('nome', $nome)->get();
    return view('mMarcacoes', compact('agendamentos'));
}

}
