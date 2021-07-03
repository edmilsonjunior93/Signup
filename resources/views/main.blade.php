<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Signup</title>
</head>
<body>
    <nav class="blue darken-4">
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo center">Cadastro</a>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('main-content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        @if (session('sucesso'))
            M.toast({html:"{{session('sucesso')}}"})
        @endif
    </script>

</body>
</html>
