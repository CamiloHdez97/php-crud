<?php 
    include("../../db.php");
    if($_POST){
        print_r($_POST);
        $nombrepuesto=(isset($_POST['nombrepuesto'])?$_POST["nombrepuesto"]:"");
        
        //Estructurar la sentencia
        $sentencia=$conexion->prepare("INSERT INTO tbl_puestos(id,nombrepuesto)
                                        VALUES (NULL,:nombrepuesto)");

        //Asignando los valores remplazando la sentencia
        $sentencia->bindParam(":nombrepuesto",$nombrepuesto);
        $sentencia->execute();

    }
?>

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
                   class="form-control" name="nombrepuesto" id="nombrepuesto" aria-describedby="helpId" placeholder="">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>
            <a type="button" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>       

    </div>

</div>

<?php include("../../templates/footer.php");?>