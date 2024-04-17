    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sua Página</title>
        
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <script src="{{ asset('js/script.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    </head>

    <body>
    <div id="wrapper" style="display: flex;" >
    

     <!-- Menu Lateral -->
     <nav id="principal" style="width: 260px; height: 650px; background-color: #f4f4f4; padding: 20px;">
            <ul>

        <br><br><br><br>
        <div style="overflow: auto; width: 240px; height: 550px; border:"> 
        <li>
                <hr class="linhaMenu">
                    <a href="/labs">
                        <i class=""></i>
                        <h3><b>Home</b></h3>
                    </a>   
                </li>
                <br>
                <li>
                <hr class="linhaMenu">
                    <a href="/labs/labProcI/1">
                        <i class=""></i>
                        <h3><b>Home-Laboratorios</b></h3>
                    </a>
                    <hr class="linhaMenu">
                </li>
                <br><br><br>
                <hr class="linhaMenu">
                <li>
                    <a href="/equipamentos">
                        <i class=""></i>
                        <h3><b>Lista de equipamentos</b></h3>
                    </a>
                </li>

                <br>
                
                <hr class="linhaMenu">
                <li>
                    
                    <a href="/reservar">
                        <i class=""></i>
                        <h3><b>Realizar Marcações</b></h3>
                    </a>
                </li>
                <br>
            
                <hr>
                <li>
                    <a href="/mMarcacoes">
                        <i class=""></i>
                        <h3><b>Minhas marcações</b></h3>
                    </a>
                </li>
<br>
<hr>
            
                
                </div>
            </ul>
        </nav>

    <!-- Conteúdo Principal -->
    <div id="content" style="flex-grow: 1; padding: 20px;">

         <x-app-layout>
            
                
    <br>
    
    <?php
       $equip="0";
       
    ?>
    @if(isset($registogravado)) $equip=3
    @endif

            <label for="equipamento">Equipamento:</label>
    <select name="equipamento" id="equipamento" style="width:170px;" required>
        <option value="">Selecione</option>
        @foreach ($equipamentos as $equipamento)
            <option value="{{ $equipamento->id }}" data-tempo-minimo="{{ $equipamento->tempo_minimo }}" 
           <?php
           if($equipamento->id==$equip)echo "selected";
           ?>
           >
                {{ $equipamento->nome }}
            </option>
        @endforeach
    </select>

            <label for="responsavel">Responsável:</label>
            <select name="responsavel" id="responsavel" onchange="atualizamodal()">
                <option value="">Selecione</option>
                @foreach ($responsaveis as $responsavel)
                    <option value="{{ $responsavel->id }}">{{ $responsavel->nome }}</option>
                @endforeach
            </select>

            <label for="projeto">Projeto:</label>
            <select name="projeto" id="projeto" onchange="atualizaprojeto()">
                <option value="">Selecione um Responsável </option>
            </select>
      
            <button type="button" class="btn btn-confirmar" data-toggle="modal" data-target="#exampleModalLong" onclick="passaEquipamento();carregaLista();passaVetor()">
                     Confirmar reserva! 
            </button>
            </center> 
<br> <br>
        <div>
     
           <center>  <button type="button" onclick="mudaSemana(-1, 
           {{ $equipamento->id }})"> <img src="{{ url('imagens/setadir.png')}}" height ="30" width="30" /></button>
           <label>Semana nº &ensp;</label><input id="inputweek" type="text" size="3" value="">
           <input id="inputyear" type="text" size="4" value="">
           
            <button type="button"onclick="mudaSemana(1, {{ $equipamento->id }})"> <img src="{{ url('imagens/setaesq.png')}}" height ="30" width="30" /></button></center>
        </div>

            <div id="idGereSemana"></div>

            <div id="tempo-minimo-info"></div>
           <br>

            <div id="calendario"></div>

<script>

$(document).ready(function() {
       
        vecHoras=['9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
        vecMerge6=[0,4,5,4];
         vecDias=['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta'];      
        const date = new Date();
        week=getWeek(date);
        year=date.getFullYear();
        document.getElementById('inputweek').value=week;
        document.getElementById('inputyear').value=year;
    
});
$('#equipamento').on('change', function () {
  
            var equipamentoId = $(this).val();
            $('#calendario').empty();
            if (equipamentoId) {
                var fichaCalendario=getCalendario(equipamentoId); 
            }
});

$('#responsavel').on('change', function () {
    var responsavelId = $(this).val();
   loadProjects(responsavelId);
});

$('#idresponsavel').on('change', function () {
    //alert('passou');
    var responsavelId = $(this).val();
    loadProjects(responsavelId);
});

function loadProjects(responsavelId){
    if (!responsavelId) {
        $('#projeto').prop('disabled', true).empty().append('<option value="">Selecione um Responsável primeiro</option>');
        return;
    }
    $.ajax({
        url: '/obter-projetos/'+ responsavelId, 
        type: 'GET',
        dataType: 'json',
        success: function (projetos) {
            $('#projeto').empty();
            $('#idprojeto').empty();
            $.each(projetos, function (index, projeto) {
                $('#projeto').append('<option value="' + projeto.id + '">' + projeto.nome + '</option>');
            });
            $.each(projetos, function (index, projeto) {
                $('#idprojeto').append('<option value="' + projeto.id + '">' + projeto.nome + '</option>');
            });
            $('#idresponsavel').value(responsavelId);
            $('#        responsavel').value(responsavelId);
            $('#projeto').prop('disabled', false);
            
         },
        error: function () {
            //console.error('Erro ao obter projetos');
       } 
    });
}

</script>
    </x-app-layout>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-personalizado" role="document" >
    <div class="modal-content">
      <div class="modal-header">
      
      <div class="form-group">
    <label for="txtequipamento"></label>
    <input type="text" id="idequipamento" size="80" placeholder="" name="txtequip" value="" readonly required>
</div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
               
            <form action="{{ route('insereReserva')}}" method="POST">
                @csrf
            <table><tr><td>
            <input type="hidden" id="idInvisivel" name="txtInvisivel" value="">
            <input type="hidden" id="idEquipInvisivel" name="txtEquipInvisivel" value="" >

            <div class="form-group">
                <label for="idutilizador">Utilizador</label>
                 <input type="text" class="form-control" id="idutilizador" placeholder="" name="txtuser" value="{{ $nome }}"size="20" readonly>
             </div>

        <div class="form-group">
                <label for="idresponsavel">Responsável</label>
            <select name="txtresponsavel" id="idresponsavel" required style="width:200px;">
                        <option value="">Selecione</option>
                        @foreach ($responsaveis as $responsavel)
                            <option value="{{ $responsavel->id }}">{{ $responsavel->nome }}</option>
                        @endforeach
                    </select>

        </div>

        <div class="form-group">
            <label for="idprojeto">Projeto</label>
            <select name="txtprojeto" id="idprojeto" required style="width:200px;">
                        <option value="">Selecione um Responsável primeiro</option>
                    </select>

        </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descrição</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtdescri" required ></textarea>
  </div></td>
  <td>
    <label>
        <button disabled class="btn btn-primary">Pedidos de Reserva</button>
    </label>
        <ul id="idLista">

        </ul>
  </td>
</tr>
</table>
      </div>
      <div class="modal-footer">
    <button type="button" class="btn btn-custom-close" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-custom-salvar">Salvar</button>
</div>

    </div>
  </div>
</div>
    </div>
    </body>
    </html>