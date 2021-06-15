<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooperativa de Reciclaje</title>
    <base href="{$base_url}">
    <link rel="stylesheet" href="./css/cssRecicladora.css">
    <link rel="stylesheet" href="./css/fonts/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7f791b61f0.js" crossorigin="anonymous"></script>
</head>

<header>
    <nav class="navegador">
        <ul class="ulnav nav justify-content-center">
            <li class="nav-item"><a class="link nav-link active" aria-current="page" href="home" </span>Home</a></li>
            <li class="nav-item"><a class="link nav-link active" aria-current="page" href="retiro">Solicitar retiro</a></li>
            {* <li class="nav-item"><a class="link nav-link active" aria-current="page" href="materiales">Materiales</a></li> *}
            <li class="nav-item"><a class="link nav-link active" aria-current="page" href="materialesAceptados">Materiales aceptados</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modificaciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">  <!--agregar css de class navegador o bien cambiar color de letras-->
                    <a class="dropdown-item"  href="#">Materiales aceptados</a>
                    <a class="dropdown-item" href="recoleccion">Recolección de materiales</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="listadoPedidoRetiro">Pedidos de retiro</a>
                </div>
            </li>
        </ul>
    </nav>
</header>