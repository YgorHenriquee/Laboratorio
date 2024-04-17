<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use App\Models\Responsavel;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function __construct( Responsavel $responsavel, Projeto $projeto){

        $this->responsavel = $responsavel;
        $this->projeto = $projeto;
    }

    public function index()
    {
        $responsaveis = $this->responsavel
            ->orderBy('nome', 'ASC')->get();

        $projetos = $this->projeto
        ->Where('id', '=', 0)
        ->orderBy('nome', 'ASC')->get();

        return view('reservar', ['responsaveis' => $responsaveis, 'projetos' => $projetos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function loadFuncoes(Request $request)
    {
        $dataForm = $request->all();
        $responsavel_id = $dataForm['$responsavel_id'];
        $sql = "Select projeto.id, projeto.nome from grupoprojeto, projeto";
        $sql = $sql ."Where grupoprojeto.projeto_id = projeto.id ";
        $sql = $sql . "and grupoprojeto.responsavel_id = '$responsavel_id'";
        $sql = $sql . "order by projeto.nome";
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
}
