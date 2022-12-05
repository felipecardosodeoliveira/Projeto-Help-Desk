<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-home {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }

        .card-abrir-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>

        <!-- Menu -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navegação -->
        <div class="collapse navbar-collapse" id="nav-target">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="consultar_chamado.php" class="nav-link">Chamados</a>
                </li>
                <li class="nav-item">
                    <a href="abrir_chamado.php" class="nav-link">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a href="sair.php" class="nav-link">Sair</a>
                </li>
            </ul>
        </div>
    </nav>