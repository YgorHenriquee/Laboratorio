<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>
<div id="wrapper" style="display: flex;">

<!-- Menu Lateral -->
<nav id="principal" style="width: 260px; height: 400px; background-color: #f4f4f4; padding: 20px;">
    <ul>

<br>
<div style="overflow: auto; width: 240px; height: 550px; border:"> 
        <li>
            <a href="/administrador">
                <i class=""></i>
                <h3><b>Home</b></h3>
            </a>
        </li>
        <br><br><br>
        <li>
            <a href="/labs">
                <i class=""></i>
                <h3><b>Visualizar Laboratórios</b></h3>
            </a>
        </li>

        <br>
        
        <hr class="linhaMenu">
        <li>
            
            <a href="listarutil">
                <i class=""></i>
                <h3><b>Visualizar Utilizadores</b></h3>
            </a>
        </li>
       
        
        </div>
    </ul>
</nav>
</body>

    
 <!-- Conteúdo Principal -->
 <div id="content" style="flex-grow: 1; padding: 20px;">

<x-app-layout>
<br>
<head>

   <style>
        body {
            font-family: Arial, sans-serif;
            background: #ECECEC;
            margin: 0;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px;
            max-width: 700px;
            align-items: center;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
            padding: 8px;
        }

        select {
            cursor: pointer;
            padding: 10px 24px;
            font-size: 14px;
            padding-left: 2; /* Remover qualquer espaço à direita */
        }

        .sem-acesso {
            background-color: #d9534f;
            color: #fff;
        }

        .pedir-acesso {
            background-color: #5bc0de;
            color: #fff;
        }

        button {
    background-color: ; /* Cor de fundo preta */
    border: none;
    color: black; /* Cor do texto branca */
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 15px;
    cursor: pointer;
    border-radius: 8px;
    transition: background-color 0.5s ease;
    border: 1px solid black; /* Adiciona uma borda branca ao redor do botão para verificar a presença */
}


        .button-cell {
            display: flex;
            justify-content: flex-start;
            align-items: center;
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
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem de Utilizadores') }}
            <center> <input type="text" id="search" class="form-control" placeholder="Procurar..."> </center> 
        </h2>
        
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">
                            <div id="search-container" class="col-md-12 mb-4"><center>
                            </div>
                            </center>
                            <div class="table-responsive">
                            <table class="min-w-full border-collapse block md:table">
                             <thead class="block md:table-header-group">
                                <center>
                                        <tr class="titulo">

                                            <th class="py-2 px-3 border">ID</th>
                                            <th class="py-2 px-3 border">Nome</th>
                                            <th class="py-2 px-3 border">Email</th>
                                            <th class="py-2 px-3 border">Saldo</th>
                                            <th class="py-2 px-3 border">Editar</th>
                                            <th class="py-2 px-3 border">Visualizar</th>
                                            <th class="py-2 px-3 border">Remover</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->saldo }}</td>
                                            <td>
                                                <a href="/editar" class="remover" title="Definir laboratorio">
                                                    <center> 
                                                        <img src="https://cdn-icons-png.flaticon.com/128/563/563541.png" alt="Configura�?es" width="35" height="20">
                                                    </center>
                                                </a>
                                            </td>
                                            <td>
                                                <center> 
                                                    <a href="/visualizar" class="remover" title="Movimentos no laboratorio">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/709/709612.png" width="35" height="20">
                                                    </a>
                                                </center>
                                            </td>
                                            <td>
                                             <center> <form action="/administrador/{{$user->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="remover" title="Remover utilizador">
                                                        <img src="https://cdn-icons-png.flaticon.com/128/1214/1214428.png" width="35" height="20">
                                                        </center>  
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody class="block md:table-row-group">
                                </table>
                            </div>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
              document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('search');
            var rows = document.querySelectorAll('tbody tr');

            searchInput.addEventListener('keyup', function () {
                var searchText = searchInput.value.toLowerCase();

                rows.forEach(function (row) {
                    var shouldShow = row.textContent.toLowerCase().includes(searchText);
                    row.style.display = shouldShow ? '' : 'none';
                });
            });

            var userTable = document.querySelector('.table-responsive');
            
            userTable.addEventListener('scroll', function(e) {
                var element = e.target;

                // Se a rolagem estiver pr?xima do final e houver mais usu?rios a serem exibidos
                if (element.scrollHeight - element.scrollTop === element.clientHeight) {
                    // Adicione mais usu?rios � tabela (por exemplo, mais 10)
                    // Isso depende da sua l?gica para carregar mais usu?rios
                    // Aqui est? um exemplo simples para adicionar mais 10 usu?rios ao final da tabela
                    var moreUsers = ''; // Adicione os usu?rios aqui
                    element.querySelector('tbody').innerHTML += moreUsers;
                }
            });
        });
        function setSelectedPerson(nome) {
        // Use JavaScript para definir a pessoa selecionada na sess?o ou cookie
        // Por exemplo, se estiver usando sessionStorage:
        sessionStorage.setItem('selectedPerson', nome);
    }
    </script>

</x-app-layout>
