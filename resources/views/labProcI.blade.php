<head>

</head>
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
<body>
    <div id="wrapper" style="display: flex;" >
    

        <!-- Menu Lateral -->
        <nav id="principal" style="width: 250px; height: 600px; background-color: #f4f4f4; padding: 20px;">
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
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
            Laboratório de Processamento I
        </h2>
    </x-slot>

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
<body>
<div id="conteudo" class="conteudo">
                        <div class="ui-widget ui-form">
                            <div class="ui-widget-header ui-corner-top"></div>
                            <div class="ui-widget-content ui-corner-bottom">
<!--                                <h1>Bem-vindo ao Laboratório de Processamento I</h1>-->
                                <table>
                                    <tbody><tr>

                                        <td><img src="https://sgm.polimeros.org/fotos/18.jpg" height="60" alt="-"></td><td><b>Gestor:</b> Miguel Nóbrega (mnobrega@dep.uminho.pt)</td>                                    </tr>   

                                    <tr><td><img src="https://sgm.polimeros.org/fotos/30.jpg" height="60" alt="-"></td><td><b>Co-Gestor:</b> Francisco Mateus (fmateus@dep.uminho.pt)<br></td></tr><tr><td><img src="https://sgm.polimeros.org/fotos/31.jpg" height="60" alt="-"></td><td><b>Co-Gestor:</b> Manuel Escourido (mescourido@dep.uminho.pt)<br></td></tr><tr><td><img src="https://sgm.polimeros.org/fotos/36.jpg" height="60" alt="-"></td><td><b>Co-Gestor:</b> João Paulo  Peixoto (jppeixoto@dep.uminho.pt)<br></td></tr>                            
                                </tbody></table>
                            </div>
                        </div>
    
</body>
</x-app-layout>

                    
                                                   
                       