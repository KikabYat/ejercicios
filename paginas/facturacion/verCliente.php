<?php
    include('../connection.php');
    $con = connection();


    //buscar cliente
    $busquedaNit = $_POST['nitCliente'];
    
    $consultar = "select id_numeroCliente, nombreCliente, apellidoCliente, direccion from tbl_clientes where nit = '$busquedaNit'";
    $query = mysqli_query($con,$consultar);
    $row = mysqli_fetch_array($query);

    $verNumeroCliente = $row['id_numeroCliente'];
    $verNombre = $row['nombreCliente'];
    $verApellido = $row['apellidoCliente'];
    $verDireccion = $row['direccion'];

    echo "<input type='text' name='numerocliente' id='numeroCliente' value='$verNumeroCliente'>";
    echo "$verNombre $verApellido $verDireccion";
    
?>