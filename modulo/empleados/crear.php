<?php include("../../templates/header.php"); ?>

<div class="card text-start">
  
    <div class="card-header">

        Datos del empleado
        
    </div>

    <div class="card-body">

        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="" class="form-label">Primer Nombre</label>
                <input type="text"
                   class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="">
            </div>
               
            <div class="mb-3">
                <label for="" class="form-label">Segundo Nombre</label>
                <input type="text"
                   class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Primer Apellido</label>
                <input type="text"
                    class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Segundo Apellido</label>
                <input type="text"
                    class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Foto:</label>
                <input type="file"
                    class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">CV(PDF):</label>
                <input type="file"
                    class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="idpuesto" class="form-label">Puesto:</label>
                <select class="form-select form-select-lg" name="idpuesto" id="idpuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>

            <div class="mb-3">
              <label for="fechaIngr" class="form-label">Fecha de Ingreso: </label>
              <input type="date" class="form-control" name="fechaIngr" id="fechaIngr" aria-describedby="fechaIngr" placeholder="abc@mail.com">
            </div>

            <button type="submit" class="btn btn-success">Agregar Registro</button>
            <a type="button" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>       

    </div>

</div>

<?php include("../../templates/footer.php");?>