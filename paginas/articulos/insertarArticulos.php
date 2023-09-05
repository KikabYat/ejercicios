<?php
    include('../connection.php');
    $con = connection();

    $consultar = "select * from tbl_articulos";

    $query = mysqli_query($con,$consultar);


    include("../../paginas/plantillas/header.php");
?>


    <h1 class='text-center'>CREAR ARTICULO</h1>
    <form action="insertar_Articulos.php" method="POST" class="d-flex justify-content-evenly">
        <input type="text" name="nombre" placeholder="Artículo" class="d-inline" required>
        <input type="text" name="precio" placeholder="Precio" class="d-inline" required>
        <input type="submit" value="Agregar Articulo" class="btn btn-warning">
    </form>
        <div class="table-responsive container text-center">
            <h2>ARTICULOS REGISTRADOS</h2>
            <table class="table align-middle">
                <thead>
                    <th class="table-active">ID</th>
                    <th class="table-active">Nombre Artículo</th>
                    <th class="table-active">Precio Artículo</th>
                    <th class="table-active">Actualizar Artículo</th>
                    <th class="table-active">Eliminar Artículo</th>
                </thead>
            

            <tbody>

                <?php while($row = mysqli_fetch_array($query)):?>
                <tr>
                    <th> <?= $row['id_codigoArticulo'] ?> </th>
                    <th> <?= $row['articulo'] ?> </th>
                    <th> <?= $row['precio'] ?> </th>

                    <th><a href="actualizarArticulos.php?id= <?= $row['id_codigoArticulo'] ?>">Actualizar</a></th>
                    <th><a href="eliminar_Articulos.php?id= <?= $row['id_codigoArticulo'] ?>">Eliminar</a></th>
                </tr>
                <?php endwhile;?>

            </tbody>

            </table>
        </div>


<?php
    include("../../paginas/plantillas/footer.php");
?>