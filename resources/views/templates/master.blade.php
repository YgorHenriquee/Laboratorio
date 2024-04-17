<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Investindo</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.csss') }}">
        @yield('css-view')
    </head>

    <body>
       @include('templates.menu-lateral') 
       @yield('conteudo-view')
       @yield('js-view')
    </body>
</html>