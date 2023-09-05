<?php
    $url_base = "http://localhost:8112/";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Facturacion</title>
</head>
<body>
    <header>

    </header>
    <nav>
        <ul class="navbar bg-primary nav" data-bs-theme="dark">
            <li>
                <a href="<?php echo $url_base?>">Inicio</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/facturacion/ventas.php">Facturación</a>
            </li>
            <li>
                <a href="">Empleados</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/clientes/insertarClientes.php">Clientes</a>
            </li>
            <li>
                <a href="<?php echo $url_base?>paginas/articulos/insertarArticulos.php">Articulos</a>
            </li>
        </ul>
    </nav>
    <main class="container">