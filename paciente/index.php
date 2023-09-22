

<?php
include('../config/config.php'); /* Conexion de la config */
include('paciente.php'); /* Conexion de las recetas */

$p= new paciente(); /* Llamo toda la clase que tienes mis recetas o funciones */
$todosRegistros= $p->getAll(); /* Traigame la funcion ver todos los usuarios */

if(isset($_GET['id']) && !empty($_GET['id'])){
    $borrar= $p->delete($_GET['id']);

    if($borrar){ /* SI SE BORRA */
        header('Location: index.php'); /* QUE SE ACTUALIZA LISTA */
    }else{ /* SINO SE BORRA QUE ME MUESTRE QUE HUBO UN ERROR */
        $mensaje= "<div class='alert-danger' rol='alert'>Error al eleminar el paciente</div>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8" />
    <title> Lista de sesiones </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
</head>
<body>
<?php include('../menu.php') ?>
    <div class="container">
        <h2 class="text-center mb-2" > Lista pacientes </h2>
        <div class="row">
            <?php
            while ($usuarios= mysqli_fetch_object($todosRegistros)){
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5>Nombre: $usuarios->nombres $usuarios->apellidos  </h5>";
                echo "<p><b>Correo:</b> $usuarios->email 
                <br>
                <b> Celular: </b>  $usuarios->celular
                </p>";
                echo " <p> <b>Fecha:</b> ".date("D", strtotime($usuarios->fecha)) . " " . date("d-M-Y", strtotime($usuarios->fecha)). " </p> ";

                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/paciente/edit.php?id=$usuarios->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/paciente/index.php?id=$usuarios->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";
            }

            ?>

        </div>
    </div>
</body>
</html>