<?php include("../../templates/header.php"); ?>

<div class="card text-start">
  
    <div class="card-header">

        Datos del Puesto
        
    </div>

    <div class="card-body">
        
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Nombre del Puesto</label>
                <input type="text"
                   class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Constraseña</label>
                <input type="password"
                   class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Correo</label>
                <input type="email"
                   class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a type="button" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>       

    </div>

</div>

<?php include("../../templates/footer.php");?>