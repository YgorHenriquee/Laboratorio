const { data } = require("jquery");

function colunaCab(dia, row, week, nDia, nYear){

    var data="";
      if (nDia>=0) data=getData(nYear, week-1, nDia );
    const cell = document.createElement("td");
    const cellText = document.createTextNode(dia+" "+data);
    cell.appendChild(cellText);
    cell.id="x"+ nDia;
    row.appendChild(cell);
}

function getWeek(date) {
    var year = new Date(date.getFullYear(), 0, 1);
     var days = Math.floor((date - year) / (24 * 60 * 60 * 1000));
     var week = Math.ceil(( date.getDay() + 1 + days) / 7);
     return week;
}

function getData(ano, semana, ordemDia){
    var d = new Date(ano, 0, 1);
    d.setDate(d.getDate() + (semana * 7)+ordemDia);
    var res=(d.getDate()).toString()+"-"+(d.getMonth()+1).toString()+"-"+(d.getFullYear()).toString();
    return res;
}
function getDataInternacional(ano, semana, ordemDia){
    var d = new Date(ano, 0, 1);
    d.setDate(d.getDate() + (semana * 7)+ordemDia);
    var res=((d.getFullYear()).toString()+"-"+(d.getMonth()+1).toString()+"-"+(d.getDate()).toString());
    return res;
}
function getOrdemDataSemana(data){
    const date=new Date(data);
    day=date.getDay();
    return day;
}   
function atualizamodal(){
    var resp=document.getElementById('responsavel').value;
    document.getElementById('idresponsavel').value=resp;
}

function atualizaprojeto(){
    var proj=document.getElementById('projeto').value;
    document.getElementById('idprojeto').value=proj;
}

function passaEquipamento(){
    $("#idequipamento").val($("#equipamento option:selected").text());
    $("#idEquipInvisivel").val($("#equipamento").val());
}

function carregaLista(){
    var lista=document.getElementById('idLista');
    lista.innerHTML = '';
    for( var i=0; i<vecReservas.length; i++){
        var item=document.createElement('li');
        var vecText=(vecReservas[i]).split(' ');
        var tempo=parseInt(vecText[2]);
       // alert(vecText[0]);
        var str=vecText[0]+" "+vecHoras[tempo];
        var texto=document.createTextNode(str);
        item.appendChild(texto);
        lista.appendChild(item);
    }    
}

function passaVetor() {
    var jsonVec=JSON.stringify(vecReservas);
    var caixaInvisivel=document.getElementById("idInvisivel");
    caixaInvisivel.value=jsonVec;
}

function mudaSemana(offset, equip){
    week=week+offset;
    if(week<1){
        week=52; year--;
    }
    if(week>52){
        week=1;year++;
    }
    document.getElementById('inputweek').value=week;
    document.getElementById('inputyear').value=year;
    $('#calendario').empty();
    getCalendario(equip);
}

function generateTable(week,year,fichaCalendario) {
    vecReservas=[];
    const tbl = document.createElement("table");
    tbl.id="idTable";
    tbl.style.width="1";
    const tblHead = document.createElement("thead");
    const tblBody = document.createElement("tbody");
    const row = document.createElement("tr");
    
    colunaCab('', row, week, -1, year);
    for(i=0; i<vecDias.length; i++) 
        colunaCab(vecDias[i], row, week, i, year);
    tblHead.appendChild(row);
    tbl.appendChild(tblHead);
    
    var maxHoras=fichaCalendario['tempoFim'];
   // alert(maxHoras);
    for (let i = 0; i < maxHoras; i++) {
        const row = document.createElement("tr");
            colunaCab(vecHoras[i], row, week);
        for (let j = 0; j < 5; j++) {
            const cell = document.createElement("td");
            cell.id=""+i+""+j;
            row.appendChild(cell);
        }
        tblBody.appendChild(row);
    }
    tbl.appendChild(tblBody);
    tbl.setAttribute("border", "2");
    tbl.addEventListener("click", function(event) {

        var dataAtual = new Date();
        var elemento = event.target;    
        var coluna=parseInt((elemento.id).charAt(1));
        var dataEscolhida = getDataInternacional(year, week-1, coluna);

        var data=new Date(dataEscolhida);
       // alert(data);
        //alert(dataAtual);

        if(data<dataAtual) {
        alert('data ja ultrapassada');
        }

        if(elemento.style.background != "red" && data>dataAtual){
        if (elemento.style.background !="green"){
                elemento.style.background="green";
                var coluna=(elemento.id).charAt(1);
                var linha=(elemento.id).charAt(0);
                var dia=document.getElementById("x"+coluna).innerHTML;
                var reserva=dia+" "+linha;
                vecReservas.push(reserva);  
            } 
                    else{
                        elemento.style.background ="0,0";
                        var indice = vecReservas.indexOf(elemento.id);
                        vecReservas.splice(indice, 1);
                    };
            }  
        });
    var calendario=document.getElementById('calendario');
    calendario.appendChild(tbl);
    vetorMerge=(fichaCalendario['vecMerge']).split(",");
    //alert(vetorMerge);
    const vec=[];
    for(i=0; i<vetorMerge.length; i++){
        var x=parseInt(vetorMerge[i]);
        vec.push(x);
    }
   mergeTempos(vec);
   mostraReservaGravada(week);
}  

function mergeTempos(vetor){
    var maxDiasSemana=4;
    for (var col=0;col<=maxDiasSemana;col++){
        for (let i = 0; i < vetor.length; i++) {
            var lin=vetor[i]; i++;
            var size=vetor[i];
            document.getElementById(lin+""+col).rowSpan=size;
            for (k=1;k<size;k++)
                 document.getElementById((lin+k)+""+col).remove();
        }		   
    }
}
function getCalendario(equipamento){
   // alert('calendario:'+equipamento);
    $.ajax({
        url: '/equipamento/getCalendario/'+ equipamento, 
        type: 'GET',
        dataType: 'json',
        success: function (response) {
         //alert(response['vecMerge']);
         //alert(response);
         generateTable(week, year, response);  
         
       } 
    });
}

function mostraReservaGravada(semana) {
    //var primeiraDataSemana=getData(2024,semana,0);
    //var ultimaDataSemana=getData(2024,semana,5);
   // alert(primeiraDataSemana);
    var equip=$('#equipamento').val();
   // alert(equip);
    $.ajax({
            url: '/getReserva/'+semana+'/'+equip, 
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                
               $.each(response, function (index, registo) {
                   var data=registo['dataReserva'];
                   
                   var tempo=registo['tempo'];
                   var coluna=getOrdemDataSemana(data)-1;
                   var linha=tempo;
                   var id=""+linha+""+coluna;
                    document.getElementById(id).style.background="red"; 
                        
                });   
            },
        });  
}


