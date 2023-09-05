<?php
    include('../connection.php');
    $con = connection();
    
    $consultar = "select * from tbl_clientes";
    
    $query = mysqli_query($con,$consultar);
    
    
    include("../../paginas/plantillas/header.php");

    
?>

CLIENTES


<h1 class='text-center'>AGREGAR CLIENTE</h1>
    <form action="insertar_Clientes.php" method="POST" class="d-flex justify-content-evenly">
        <input type="text" name="nit" placeholder="Nit" class="d-inline">
        <input type="text" name="nombre" placeholder="Nombre" class="d-inline" required>
        <input type="text" name="apellido" placeholder="Apellido" class="d-inline" required>
        <input type="text" name="direccion" placeholder="Dirección" class="d-inline" required>
        <input type="submit" value="Agregar Cliente" class="btn btn-warning">
    </form>
        <div class="table-responsive container text-center">
            <h2>CLIENTES REGISTRADOS</h2>
            <table class="table align-middle">
                <thead>
                    <th class="table-active">ID</th>
                    <th class="table-active">Nit</th>
                    <th class="table-active">Nombre</th>
                    <th class="table-active">Apellido</th>
                    <th class="table-active">Direccion</th>
                    <th class="table-active">Actualizar</th>
                    <th class="table-active">Eliminar</th>
                </thead>
            

            <tbody>
                <?php while($row = mysqli_fetch_array($query)):?>
                    <tr>
                        <th> <?= $row['id_numeroCliente'] ?> </th>
                        <th> <?= $row['nit'] ?> </th>
                        <th> <?= $row['nombreCliente'] ?> </th>
                        <th> <?= $row['apellidoCliente'] ?> </th>
                        <th> <?= $row['direccion'] ?> </th>

                        <th><a href="actualizarClientes.php?id= <?= $row['id_numeroCliente'] ?>">Actualizar</a></th>
                        <th><a href="eliminarClientes.php?id= <?= $row['id_numeroCliente'] ?>">Eliminar</a></th>
                    </tr>
                <?php endwhile;?>

            </tbody>

            </table>
        </div>


<?php
    include("../../paginas/plantillas/footer.php");
?>
