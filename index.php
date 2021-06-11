<!doctype html>
<html lang="es">
  <head>
    <title>Superheroes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="dependencias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencias/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dependencias/datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="dependencias/sweetalert/css/sweetalert2.min.css">
    <!-- JS -->
    <script src="dependencias/jquery/jquery-3.6.0.min.js"></script>
    <script src="dependencias/popper/popper.min.js"></script>
    <script src="dependencias/bootstrap/js/bootstrap.min.js"></script>
    <script src="dependencias/fontawesome/js/all.min.js"></script>
    <script src="dependencias/datatable/js/jquery.dataTables.min.js"></script>
    <script src="dependencias/sweetalert/js/sweetalert2.all.min.js"></script>
    <script src="js/agregarSuperheroes.js"></script>
  </head>
  <body background="img/Marvel-Vs.-DC.png">
    <div class="container">
      <?php
        require_once "view/general/navbar.php";
        if(isset($_GET['vista_solicitada'])){
          switch($_GET['vista_solicitada']){
            case 'inicio':
              require_once 'view/agregarSuperheroes.php';
              break;
            case 'tabla':
              require_once 'view/mostrarSuperheroes.php';
              break;
            default:
              require_once 'view/404.php';
          }
        }else{
          require_once 'view/agregarSuperheroes.php';
        }
        ?>
    </div>
  </body>
</html>