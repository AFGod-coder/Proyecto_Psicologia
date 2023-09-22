<?php
include('../config/config.php');
include('paciente.php');

if (isset($_POST) && !empty($_POST)){
  /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */

  $data= new Paciente(); /* LLAMO A MI LIBRO DE RECETAS */

 

  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UFT-8" />
        <title> Registrar sesion </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/iniciostyle.css">
    <link rel="stylesheet" href="../js/index.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo_empresa.png" type="image/x-icon">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="empresa-padre" href="index.html">
          <img src="../img/logo_empresa.png" alt="logo_empresa">
          <h1 class="empresa">Good Vibes&nbsp; &nbsp; <span>&#160</span></h1> 
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item-menu">
              <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pagina.html">Servicios</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Talleres
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Inteligencia Emocional</a></li>
                <li><a class="dropdown-item" href="#">Estilos de liderazgo</a></li>
                <li><a class="dropdown-item" href="#">Toma de decisiones</a></li>
                <li><a class="dropdown-item" href="#">Manejo de emociones</a></li>
                <li><a class="dropdown-item" href="#">Acoso laboral</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Mas...</a></li>
              </ul>
            </li>
          </ul>
  
          <div class="contenedor">
            <div class="butons">
              <a href="./add.php"><input class="boton" type="button" value="Contactanos"></a>
          
            </div>
          </div>

        </div>
        </div>
      </div>
    </nav>
        <div class="container" style="position:relative; top: 150px">
            <?php
            if(isset($mensaje)){
                echo $mensaje;
            }

            ?>
            <h2 class="text-center mb-2" > Registrar sesión </h2>
            <form method="POST" enctype="multipart/form-data" >

            <div class="row mb-2" >
                <div class="col" >
                    <input type="text" name="nombres" id="nombres" placeholder="nombres del paciente" class="form-control" />
                </div>
                <div class="col" >
                    <input type="text" name="apellidos" id="apellidos" placeholder="apellidos del paciente" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                    <input type="email" name="email" id="email" placeholder="email del paciente" class="form-control" />
                </div>
                <div class="col" >
                    <input type="number" name="celular" id="celular" placeholder="celular del paciente" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                <input type="date" name="fecha" id="fecha" class="form-control" />  
                </div>
                <div class="col" >
                    <input type="texto" name="duracionSesion" id="duracionSesion" placeholder="duración de la sesión" class="form-control" />
                </div>
            </div>

            <div class="row mb-2" >
                <div class="col" >
                  <textarea id="enfermedades" name="enfermedades" placeholder="enfermedades del paciente" class="form-control"></textarea>
                </div>
            </div>
            <button class="btn btn-success"> Registrar </button>

            </form>
            
        </div>  

        <footer class="footer" style="position: relative; top:200px">
    <div class="seccion-de-arriba">
      <div class="container-seccion">
        <img src="../img/logo-empresa.png" alt="Logo">
            <p><b>Información de contacto:</b></p>
            <ul>
              <li>Teléfono: +1 320 492 0412</li>
              <li>Correo electrónico: adelgonzao@hotmail.com</li>
              <li>Dirección: 081 Boca Raton, FL, United States</li>
            </ul>
        </div>
        <div class="social-links">
          <h5 class="redes-sociales">Redes sociales</h5>
          <ul class="social-icons">
            <a href="index.html">
              <img src="../img/facebook-logo.png" alt="">
            </a>
            <br>
            <a href="index.html">
              <img src="../img/twiter-logo.png" alt="">
            </a>
            <br>
            <a href="index.html">
              <img src="../img/instagram-logo.png" alt=""> 
            </a>
          </ul>
        </div>
        <div class="container-seccion">
          <h5><b>Mapa del sitio</b></h5>
              <ul>
                <p>
                  <a href="../index.html">Inicio</a> <br>
                  <a href="../pagina.html">Servicios</a> <br>
                  <a href="../Talleres.html">Talleres</a> <br>
                  <a href="../paciente/add.php">Contacto</a> <br>
                <p>
              </ul>
        </div>
  
      
  
      <div class="">
        <h5> <b>Suscríbete a nuestro boletín</b> </h5>
        <p>Recibe nuestras últimas noticias y ofertas especiales por correo electrónico.</p>
        <form>
          <input type="email" name="email" placeholder="Ingresa tu correo electrónico">
          <button type="submit">Suscribirme</button>
        </form>
        
      </div>
    </div>
    </div>

    <hr>

    <div class="seccion-de-abajo">
      
      <div class="policy-links-footer">
        <div class="">
          <ul class="policy-links">
            <a href="#">Política de privacidad</a><br>
            <a href="#">Términos y condiciones</a><br>
            <a href="#">2023 Todos los derechos reservados. <span>Good Vibes</span> </a>
          </ul>
        </div>
      </div>
    </div>

  </footer>
    </body>
</html>