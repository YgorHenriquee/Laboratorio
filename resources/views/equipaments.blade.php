<!DOCTYPE html>
<html lang="pt-pt">
<body>
    
<div id="wrapper" style="display: flex;" >
    

    <!-- Menu Lateral -->
    <nav id="principal" style="width: 300px; height: 650px; background-color: #f4f4f4; padding: 20px;">
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
                <a href="/labProIII">
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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
            <label for="search"></label>
<input type="text" id="search" name="search" onkeyup="filterTable()" placeholder="Digite para pesquisar">

        </h2>
    </x-slot>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        hr {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
}
    </style>
</head>
<body>
<br>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Uso minímo</th>
            <th>Custo/Periodo (€)</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($equipamentos as $equipamento)
        <tr id="equipamento_{{ $equipamento->id }}">
        <a href="{{ URL::asset('/l') }}"><td>{{ $equipamento->nome }}</td>
                <td>{{ $equipamento->tempo_minimo }}</td>
                <td>{{ $equipamento->preco }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    function filterTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.getElementsByTagName("table")[0];
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Modifique conforme o índice da coluna que deseja pesquisar
        if (td) {
            txtValue = td.textContent || td.innerText;
            var rowId = tr[i].id;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                document.getElementById(rowId).style.display = "";
            } else {
                document.getElementById(rowId).style.display = "none";
            }
        }
    }
}

</script>

</body>
</x-app-layout>
</html>
