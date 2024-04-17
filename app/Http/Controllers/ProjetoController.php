<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projeto; 



class ProjetoController extends Controller

{
    public function obterProjetos($responsavelId)
    {
        $projetos = Projeto::where('idResp', $responsavelId)->get();
     //  $projetos = Projeto::all();
       return response()->json($projetos);
    }
}
