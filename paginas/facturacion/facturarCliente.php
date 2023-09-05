<?php
    include('../connection.php');
    $con = connection();


    //crear factura
    $id_numeroFactura = null;
    $id_numeroCliente = $_POST['numerocliente'];
    $fechaActual = null;
    
    $insertar = "INSERT INTO tbl_facturas (id_numeroCliente, fecha) VALUES ('$id_numeroCliente', '$fechaActual')";
    $query = mysqli_query($con, $insertar);

    echo "$id_numeroFactura";


/*     $row = mysqli_fetch_array($query);

    $verCodigoArticulo = $row['id_codigoArticulo'];
    $verArticulo = $row['articulo'];
    $verPrecio = $row['precio'];



    echo "$verCodigoArticulo $verArticulo $verPrecio"; */
?>