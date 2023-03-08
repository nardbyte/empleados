<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f2f2f2;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }

        img {
            user-drag: none;
            -webkit-user-drag: none;
        }

        nav .navbar-nav li a,
        a.navbar-brand {
            color: white !important;
        }

        h1 {
            font-size: 3rem;
            text-align: center;
            margin-top: 2rem;
        }

        /* CSS Custom for add new */

        label {
            font-size: 1.2rem;
            font-weight: bold;
            color: #444;
        }

        .form-control {
            height: 50px;
            font-size: 1.2rem;
            border-radius: 0;
            border: none;
            box-shadow: none;
            border-bottom: 2px solid #bbb;
        }

        .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid #6c757d;
        }

        .btn-primary {
            border-radius: 0;
            border: none;
            box-shadow: none;
        }
    </style>
    <title>Empleados</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg link-light mb-4" style="background-color: #005caf;">
        <div class="container">
            <a class="navbar-brand"><img src="./assets/images/arbol.svg" width="25" height="30"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="registrar.php"><i class="bi bi-person-fill-add"></i> Nuevo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./"><i class="bi bi-people-fill"></i> Empleados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">