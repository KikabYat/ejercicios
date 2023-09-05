<?php
    include('../connection.php');
    $con = connection();

    $id = $_GET['id'];

    $consultar = "select * from tbl_clientes where id_numeroCliente = '$id'";
    $query = mysqli_query($con, $consultar);
    $row = mysqli_fetch_array($query);

    include("../../paginas/plantillas/header.php");
?>


<div>
        <form action="actualizar_Clientes.php" method="POST">
            <h1>Actualizar Clientes</h1>
            <input type="hidden" name="id" value="<?= $row['id_numeroCliente'] ?>">     
            <input type="text" name="nit" placeholder="NIT" value="<?= $row['nit'] ?>">     
            <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombreCliente'] ?>">     
            <input type="text" name="apellido" placeholder="Apellido" value="<?= $row['apellidoCliente'] ?>">     
            <input type="text" name="direccion" placeholder="Dirección" value="<?= $row['direccion'] ?>">     
        
            <input type="submit" value="Actualizar Cliente" class="btn btn-success">
        </form>
</div>