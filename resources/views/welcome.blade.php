<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <!-- Adicione os links para os arquivos do Bootstrap CSS e JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo para o fundo da seção de boas-vindas */
        .jumbotron {
            background: url('https://img.freepik.com/vetores-premium/computadores-e-software-laboratorio-de-informatica-administracao-de-sistemas-solucao-de-problemas-tecnologia-da-informacao_566886-2931.jpg') no-repeat center center;
            background-size: cover;
            color: black; /* Cor do texto */
        
        }
        /* Estilo para os botões de login e registro */
        .btn-login {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar do Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laboratório</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
               <a  href= "/labs" class="nav-link">Rede de Laboratorios</a>
                </li>
                <li class="nav-item">
               <form action="/logout" method="POST">
                @csrf
                <a href ="/logout" 
                class="nav-link" 
                     onclick="event.preventDefault();
                    this.closest('form').submit();"> 
                 Sair
                </a>
               </form> 
                </li>
                @endauth
                @guest
    <li class="nav-item">
        <a  href= "/login" class="nav-link">Login</a>
    </li>
    <li class="nav-item">
        <a  href= "/register" class="nav-link">Registo</a>
    </li>
    @endguest
</ul>

        </div>
    </nav>

    <!-- Seção de Destaque -->
    <section class="jumbotron text-center">
        <h1 class="display-4"><strong>Rede de Laboratórios</strong></h1>
    
    </section>
<br><br><br>
    <!-- Conteúdo Principal -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Rede de Laboratórios: Tecnologia e Inovação</h2>
            <p> Bem-vindo a nossa Rede de laboratórios, um espaço dedicado para o estudo, e para a verificação de salas ou equipamentos disponíveis a qualquer momento. Nossa missão é facilitar a vossa utilização de produtos e fornecer soluções de tecnologia da informação de ponta para empresas e gestores.</p>
            </div>
            <div class="col-lg-4">
                <h2>Aceda quando quiser</h2>
                <p>«Faça o login ou o registro a qualquer momento e ainda melhor, pelo uso de dispositivos movéis.</p>
            </div>
        </div>
    </div>
<br><br><br><br>
    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2023 Universidade do Minho
    </footer>

    <!-- Adicione os scripts do Bootstrap JavaScript (jQuery, Popper.js e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
