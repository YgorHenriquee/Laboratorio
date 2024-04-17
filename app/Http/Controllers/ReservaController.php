<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Linreserva;
use App\Models\Periodo;
use Request;
use App\Models\Reserva; 
use Illuminate\Support\Facades\DB;
use DateTime;


class ReservaController extends Controller
{
    public function insere() {
        $vetor=Request::input('txtInvisivel');
        $vecReservas=json_decode($vetor);
       //echo $vetor."<";
       $reserva=new Reserva();
       $reserva->equipamento_id=Request::input('txtEquipInvisivel');
       $reserva->responsavel_id=Request::input('txtresponsavel');
       $reserva->projeto_id=Request::input('txtprojeto');
       $reserva->nome=Request::input('txtuser');
       $reserva->obs=Request::input('txtdescri');
       $reserva->save();
       
       $ultima = $reserva->id;
     //echo $ultima;
     
    for($i=0; $i<sizeof($vecReservas); $i++){
       // echo $vecReservas[$i]."<br>";
       $vecLin=explode(" ", $vecReservas[$i]);
       $dia=date("Y-m-d",strtotime($vecLin[1]));
       $tempo=$vecLin[2];
       $dataReserva=new Linreserva();
       $dataReserva->numReserva=$ultima;
       $dataReserva->dataReserva=$dia;
       $dataReserva->tempo=$tempo;
       $dataReserva->idEquipamento=Request::input('txtEquipInvisivel');
       $dataReserva->save();
    }   
    return redirect()->back()->with('message', 'Solicitação enviada com sucesso!')->with('registogravado', $reserva);
    }
    
    public function getReserva($Week, $equipamento)
    {   
        $datetimeImmutable = new DateTime();

        $Year = '2024';
    
        $a = $datetimeImmutable->setISODate($Year, $Week, 1);
        $sd=$a->format('Y-m-d');
        $b = $datetimeImmutable->setISODate($Year, $Week, 5);
        $ed=$b->format('Y-m-d');
        $reservas=Linreserva::whereBetween('dataReserva',[$sd, $ed])->where('idEquipamento', $equipamento)->get();
        //$reservas=Linreserva::();
        return response()->json($reservas);
    }
    public function getCalendario($equipamento){
        $equip=Equipamento::find($equipamento);
        $ncalendar=$equip->tipoCalendario;
        $calendario=Periodo::find($ncalendar);
        return response()->json($calendario);
        
    }

}
