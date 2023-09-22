
<?php
include('../config/config.php');
include('paciente.php');
$p = new paciente();
$dp = mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($dp->fecha);

if (isset($_POST) && !empty($_POST)){
 
  $update = $p->update($_POST);
  if ($update){
    $mensaje = '<div class="alert alert-success" role="alert"> Modificado correctamente</div>';
  }else{
    $mensaje = '<div class="alert alert-danger" role="alert" > Error al modificar </div>';
  }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Modificar sesion </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
    <?php include('../menu.php') ?>
        <div class="container" >
        <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
            <h2 class="text-center mb-2" > Modificar sesion </h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
                <div class="col" >
                    <input type="text" name="nombres" id="nombres" placeholder="nombres del paciente" class="form-control" value="<?= $dp->nombres ?>" />
                    <input type="hidden" name= "id" value="<?= $dp->id ?>" />
                </div>
                <div class="col" >
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del paciente" class="form-control" value="<?= $dp->apellidos ?>"/>
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                    <input type="email" name="email" id="email" placeholder="email del paciente" class="form-control" value="<?= $dp->email ?>" />
                </div>
                <div class="col" >
                    <input type="number" name="celular" id="celular" placeholder="celular del paciente" class="form-control" value="<?= $dp->celular ?>" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                <input type="date" name="fecha" id="fecha" class="form-control" value="<?= $date->format('Y-m-d') ?>"/>  
                </div>
                <div class="col" >
                    <input type="text" name="duracionSesion" id="duracionSesion" placeholder="duracion de la Sesion" class="form-control" value="<?= $dp->duracionSesion ?>" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                  <textarea id="enfermedades" name="enfermedades" placeholder="enfermedades del paciente" class="form-control"> <?= $dp->enfermedades ?> </textarea>
                </div>
            </div>
            <button class="btn btn-success"> Modificar </button>

            </form>
        </div>  
    </body>
</html>