<?php
    include("../../paginas/plantillas/header.php");


    include('../connection.php');
    $con = connection();
    date_default_timezone_set('America/Guatemala');
    $fechaActual = date("d-m-Y");
    $horaActual = date("h:i:s");

    //Consultar numero de factura
    $consultar = "select id_numeroFactura from tbl_facturas order by id_numeroFactura desc limit 1";
    $query = mysqli_query($con,$consultar);
    $row = mysqli_fetch_array($query);

    $no_Factura = $row['id_numeroFactura']+1;
?>

<div class="container text-center">
    <div class="row align-items-start">
        <h2>NUEVA VENTA</h2>
        <div class="col">
            <h4>Encabezado Factura</h4>
            <form action="">
                <label for="">Número de factura: <?= $no_Factura ?> </label><br>
                <label for="">Fecha: <?= $fechaActual ?> </label><br>
                <label for="">Hora: <?= $horaActual ?> </label><br>
            </form>
        </div>
        <div class="col">
            <h4>Datos del Cliente</h4>
            <form id="formCliente" action="verCliente.php" method="POST">
                <input type="text" placeholder="Nit" name="nitCliente">
                <button type="button" id="buscarCliente" name="buscarCliente" class="btn btn-warning">Buscar Cliente</button>
            </form>

            <div id="verCliente">

            </div>
        </div>
    </div>
    <br>

    <script>
        //código para buscar cliente
        $('#buscarCliente').click(function(e){
            $.ajax({
                url:"verCliente.php",
                type:"POST",
                data: $("#formCliente").serialize(),

                success: function(resultado){
                   $("#verCliente").html(resultado); 
                }

            });
        });
    </script>


    <div>
        <form id="formFacturar" action="" method="POST">
            <button class="btn btn-info" type="button" id="btnFacturar" name="facturar">Facturar</button>
            <button class="btn btn-danger" type="button" name="anular">Anular Factura</button>
        </form>
    </div>

    <div id="verMensaje">

    </div>
    <script>
        //código para crear factura
        $('#btnFacturar').click(function(e){
            $.ajax({
                url:"facturarCliente.php",
                type:"POST",
                data: $("#numeroCliente").serialize(),

                success: function(resultado){
                   $("#verMensaje").html(resultado); 
                }

            });
        });
    </script>


    <br>

    <div>
        <h4>Detalle de factura</h4>
        <div>
            <form action="verArticulo.php" id="formArticulo" method="POST">
                <input type="text" placeholder="Código" name = "codigo">
                <button type="button" id="buscarArticulo" class="btn btn-warning">Buscar Articulo</button>
            </form>

            <div id="verArticulo">
                
            </div>
        </div>
    </div>

    <script>
        //código para buscar articulo
        $('#buscarArticulo').click(function(e){
            $.ajax({
                url:"verArticulo.php",
                type:"POST",
                data: $("#formArticulo").serialize(),

                success: function(resultado){
                   $("#verArticulo").html(resultado); 
                }

            });
        });
    </script>
    <br>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Código Artículo</th>
                    <th>Descripción del Artículo</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>
    </div>
</div>