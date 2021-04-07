<?php include('includes/admin_check.php'); ?>
<!DOCTYPE html>
<html lang="en" class="vw-100 vh-100 overflow-hidden">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 60px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
            background-color: #f5f5f5;
        }

        body>.container {
            padding: 60px 15px 0;
        }

        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }

        code {
            font-size: 80%;
        }
    </style>
    <title>MOALL</title>
    <style>
        .onhover:hover {
            background-color: #f5f5f5 !important;
            color: black !important;
        }
    </style>
</head>

<body class="w-100 h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color: #000">
            <div class="container-fluid">
                <a class="navbar-brand p-0" href="index.php"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153.68 98.95" style="enable-background:new 0 0 153.68 98.95; width: 4rem; height: 4rem;">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g id="EDITAR_PROD">
                            <path class="st0" d="M16.23,85.49v-71.8h27.35c1.85,0,3.45,0.68,4.81,2.03c1.35,1.35,2.03,2.96,2.03,4.81v64.96h-6.84V20.53
		c0-0.92-0.36-1.71-1.07-2.35c-0.64-0.71-1.43-1.07-2.35-1.07H23.06v3.42h6.84c1.85,0,3.45,0.68,4.81,2.03
		c1.35,1.35,2.03,2.96,2.03,4.81v58.12H29.9V27.37c0-0.92-0.36-1.71-1.07-2.35c-0.64-0.71-1.43-1.07-2.35-1.07h-3.42v61.54H16.23z" />
                            <path class="st0" d="M61.28,86.03c-1.46,0-2.71-0.49-3.73-1.46c-0.97-1.03-1.46-2.27-1.46-3.73V36.7c0-1.41,0.49-2.62,1.46-3.65
		c1.03-1.03,2.27-1.54,3.73-1.54h7.79c1.41,0,2.62,0.51,3.65,1.54c1.03,1.03,1.54,2.25,1.54,3.65v44.14c0,1.46-0.51,2.71-1.54,3.73
		c-1.03,0.97-2.25,1.46-3.65,1.46H61.28z M61.28,85.39H61.2H61.28z M66.47,83.44c0.7,0,1.3-0.24,1.79-0.73
		c0.54-0.49,0.81-1.11,0.81-1.87V36.7c0-0.7-0.27-1.3-0.81-1.79c-0.49-0.54-1.08-0.81-1.79-0.81h-2.6c-0.76,0-1.38,0.27-1.87,0.81
		c-0.49,0.49-0.73,1.08-0.73,1.79v44.14c0,0.76,0.24,1.38,0.73,1.87c0.49,0.49,1.11,0.73,1.87,0.73H66.47z" />
                            <path class="st0" d="M80.81,86.03V36.7c0-1.41,0.49-2.62,1.46-3.65c1.03-1.03,2.27-1.54,3.73-1.54h7.79c1.41,0,2.62,0.51,3.65,1.54
		c1.03,1.03,1.54,2.25,1.54,3.65v49.33h-5.19V67.86H86v18.17H80.81z M93.79,65.26V36.7c0-0.7-0.27-1.3-0.81-1.79
		c-0.49-0.54-1.08-0.81-1.79-0.81h-2.6c-0.76,0-1.38,0.27-1.87,0.81C86.24,35.4,86,36,86,36.7v28.56H93.79z" />
                            <path class="st0" d="M105.53,86.03V31.51h5.19v51.93h10.39v2.6H105.53z" />
                            <path class="st0" d="M126.85,86.03V31.51h5.19v51.93h10.39v2.6H126.85z" />
                        </g>
                    </svg></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto text-uppercase">
                        <a class="nav-link active" href="productos.php">Productos</a>
                        <a class="nav-link active" href="hombre.php">Hombre</a>
                        <a class="nav-link active" href="mujer.php">Mujer</a>
                        <a class="nav-link active text-decoration-underline" href="<?= isset($_SESSION['user_mail']) ? 'logout.php' : 'inicio.php' ?>"><?= isset($_SESSION['user_mail']) ? 'Cerrar sesión' : 'Ingresar' ?></a>
                        <a class="nav-link active text-decoration-underline <?= isset($_SESSION['user_mail']) ? 'd-none' : '' ?>" href="registro.php">Registrarse</a>
                        <a class="nav-link active" href="<?= AdminCheck() ? 'pedidos' : 'carrito' ?>.php">
                            <span class="d-lg-none"><?= AdminCheck() ? 'Pedidos' : 'Carrito' ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <a class="nav-link active" href="buscar.php">
                            <span class="d-lg-none">Buscar</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>