<?php
    include('../connection.php');
    $con = connection();

    $id = $_GET['id'];



    $eliminar = "DELETE from tbl_Clientes WHERE id_numeroCliente = '$id'";
    $query = mysqli_query($con,$eliminar);

    if($query){
        Header("Location: insertarClientes.php");
    }
?>