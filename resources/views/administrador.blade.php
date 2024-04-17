<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>
<div id="wrapper" style="display: flex;">

<!-- Menu Lateral -->
<nav id="principal" style="width: 260px; height: 400px; background-color: #f4f4f4; padding: 20px;">
    <ul>

<br>
<div style="overflow: auto; width: 240px; height: 550px; border:"> 
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
<body>
<div id="conteudo" class="conteudo">
                        <!-- PUT MAIN COLUMN CODE HERE -->
                        <p>Bem-vindo ao sistema de gestão de marcação de equipamento do Instituto de Polímeros e Compósitos/Departamento de Engenharia de Polímeros. Nesta página poderá obter todas as informações necessárias para utilizar os vários laboratórios do IPC/DEP.</p><p>Aconselhamos uma leitura pormenorizada do <b>Regulamento Geral</b> dos laboratórios, antes de os utilizar. As marcações de equipamento são obrigatórias e são efetuadas nesta página.</p><p>Para poder marcar um equipamento terá que estar registado como utilizador dos laboratórios do IPC/DEP. Caso ainda não esteja registado, deve entrar em contacto com o Gestor do laboratório ou com o orientador para que o seu registo seja efetuado.</p><div><a href="documentacao.php" style="padding: .5em 1em" class="ui-button ui-widget fg-button  ui-state-default ui-corner-all">Documentação importante para a utilização do SGM</a></div><br><br><br><p>Welcome to the management system of equipment booking of Institute for Polymers and Composites / Department of Polymer Engineering. On this page you can get all the information necessary to use the various laboratories of the IPC / DEP.</p><p>We recommend reading carefully the <b>General Regulations</b> of the laboratories before use. Booking of the equipment is mandatory and is done on this page.</p><p>To book the equipment you have to be a registered user of the laboratories of IPC / DEP. If you are not registered yet, you must contact the laboratory manager or your supervisor to make the registration.</p><div><a href="documentacao.php" style="padding: .5em 1em" class="ui-button ui-widget fg-button ui-state-default ui-corner-all">Important documentation for SGM</a></div>
                    </div>
                </div>
            </div>
          
        </div>
    
</body>

</x-app-layout>
