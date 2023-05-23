<?php include("../../templates/header.php"); ?>

    <br/>

    <div class="card">
        <div class="card-header">
            Agregar Usuarios
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del Uusario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Oscar Uh</td>
                        <td>***</td>
                        <td>correo@correo</td>
                        <td>
                            <input name="btnEditar" id="btnEditar" class="btn btn-info" type="button" value="Editar">
                            |
                            <input name="btnBorrar" id="btnBorrar" class="btn btn-danger" type="button" value="Borrar">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>

    </div>

<?php include("../../templates/footer.php");?>