<?php
    include('../connection.php');
    $con = connection();

    $id = $_GET['id'];

    $consultar = "select * from tbl_articulos where id_codigoArticulo = '$id'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Actualizar Artículos</title>
</head>
<body>
    <div>
        <form action="actualizar_Articulos.php" method="POST">
            <h1>Actualizar Artículos</h1>
            <input type="hidden" name="id" value="<?= $row['id_codigoArticulo'] ?>">     
            <input type="text" name="nombre" placeholder="Articulo" value="<?= $row['articulo'] ?>">     
            <input type="text" name="precio" placeholder="Precio" value="<?= $row['precio'] ?>">     
        
            <input type="submit" value="Actualizar Información" class="btn btn-success">
        </form>
    </div>
    
</body>
</html>