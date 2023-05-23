<?php 

    include("../../db.php");
    $sentencia=$conexion->prepare(" SELECT * FROM `tbl_empleados`");
    $sentencia->execute();
    $lista_tbl_empleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    print_r($lista_tbl_empleados);

?>

<?php include("../../templates/header.php"); ?>

    <h3>Lista de Empleados</h3>
    <div class="card">
        <div class="card-header">
            <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registro</a>
        </div>

        <div class="card-body">

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>         
                        <th scope="col">Acción</th>                  
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista_tbl_empleados as $registro){ ?>

                        <tr class="">
                            <td scope="row"><?php echo $registro['id']; ?></td>
                            <td><?php echo $registro['primernombre']." ".$registro['segundonombre']; ?></td>
                            <td><?php echo $registro['primerapellido']." ".$registro['segundoapellido'];; ?></td>
                            <td><?php echo $registro['foto']; ?></td>
                            <td><?php echo $registro['cv']; ?></td>
                            <td><?php echo $registro['idpuesto']; ?></td>
                            <td><?php echo $registro['fechaingreso']; ?></td>
                            <td>
                                <a name="" id="" class="btn btn-success" href="#" role="button">Carta</a> |
                                <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a> |
                                <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>

        </div>
            <div class="card-footer text-muted">
            Empleados
        </div>

    </div>

<?php include("../../templates/footer.php");?>