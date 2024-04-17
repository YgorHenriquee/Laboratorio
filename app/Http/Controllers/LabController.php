<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\SolicitacaoEmail;
use App\Models\Solicitacao;
use Illuminate\Support\Facades\Mail;
use App\Models\Equipamento;

class LabController extends Controller
{
    // app/Http/Controllers/LabController.php

    public function store(Request $request)
    {
        // Criar um novo Lab
        $lab = Lab::create([
            'sala' => $request->sala,
            'username' => $request->username,
            'entry_time' => $request->entry_time,
            'purpose' => $request->purpose,
        ]);
    
        // Lidar com Equipamento
        foreach ($request->equipment as $nomeEquipamento) {
            $equipamento = Equipamento::create([
                'nomeEquipamento' => $nomeEquipamento,
                'lab_id' => $lab->id, // Associar o equipamento ao laboratório recém-criado
            ]);
        }
        
        return redirect('/');
    }
    
    public function index()
{
    // Obter todos os equipamentos
    $equipamentos = Equipamento::all();

    // Obter todos os labs (se necessário)
    $labs = Lab::all();

    return view('index', compact('equipamentos', 'labs'));
}

        public function aprovarSolicitacao($id)
{
    $solicitacao = Solicitacao::findOrFail($id);

    // Adicione lógica para aprovar a solicitação aqui

    // Exemplo: Atualizar o status da solicitação para aprovado
    $solicitacao->status = 'aprovado';
    $solicitacao->save();

    // Também seria uma boa ideia adicionar uma verificação para garantir que a solicitação
    // só seja aprovada uma vez, se necessário.

    return redirect()->back()->with('message', 'Solicitação aprovada com sucesso!');

}
function verLab($nlab){
    return view('labProcI');
}

function marcacoesLab(){
    return view('mMarcacoes');
}

}