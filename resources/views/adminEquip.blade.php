<!DOCTYPE html>
<html lang="pt-pt">
<body>
    <div id="wrapper" style="display: flex;">

        <!-- Menu Lateral -->
        <nav id="principal" style="width: 200px; background-color: #f4f4f4; padding: 20px;">
            <ul>

        <br>
                <li>
                    <a href="/">
                        <i class=""></i>
                        <h3><b>Home</b></h3>
                    </a>
                </li>
                <br><br><br>
                <li>
                    <a href="/labs">
                        <i class=""></i>
                        <h3><b>Laboratorios</b></h3>
                    </a>
                </li>
<br><br>
                <li>
                    <a href="/adminEquip">
                        <i class=""></i>
                        <h3><b>Lista de equipamentos</b></h3>
                    </a>
                </li>
                <br><br><br>
               
<br><br><br>
                <li>
                    <a href="/reservar">
                        <i class=""></i>
                        <h3><b>Realizar marcações</b></h3>
                    </a>
                </li>
                <br><br><br>
                <li>
                    <a href="">
                        <h3><b>Minhas marcações</b></h3>
                    </a>
                </li>
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
        <button class="styled-button">Clique Aqui</button>
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
        .styled-button {
    background-color: #4CAF50; /* Cor de fundo verde */
    border: none;
    color: white; /* Cor do texto branco */
    padding: 10px 25px; /* Espaçamento interno */
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px; /* Tamanho da fonte */
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px; /* Bordas arredondadas */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra */
    transition: background-color 0.3s; /* Transição suave */
}

.styled-button:hover {
    background-color: #45a049; /* Cor de fundo mais escura ao passar o mouse */
}
    </style>
</head>
<body>
<br>

<table>
    <thead>
        <tr>
            <th>Nome do Equipamentoooo</th>
            <th>Tempo Mínimo de Reserva (horas)</th>
            <th>Preço por Periodo (£)</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($equipamentos as $equipamento)
        <tr id="equipamento_{{ $equipamento->id }}">
                <td>{{ $equipamento->nome }}</td>
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
