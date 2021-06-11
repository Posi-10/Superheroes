<div class="row">
  <div class="col">
    <?php
      include "app/conexion.php";
      $conexion = conexion();
      $sql = "SELECT id_heroe,
                      imagen,
                      heroe,
                      power,
                      nombre,
                      genero,
                      publicacion 
              FROM t_heroes";
      $result = mysqli_query($conexion, $sql);

    ?>
    <div class="card border-0 my-5" style="background-color: rgba(255,255,255,0.7);">
      <div class="card-body p-5">
        <h1 class="font-weight-light">Tabla listado obtenido</h1>
        <hr>
        <p class="lead" style="text-align: center;">
        <table class="table table-hover table-condensed" id="tablaheroes">
          <thead>
            <th>#</th>
            <th>Heroe</th>
            <th>Power</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Publicado</th>
          </thead>
          <tbody>
            <?php
                while($ver = mysqli_fetch_array($result)):
            ?>
            <tr>
              <td> <img src="<?php echo $ver['imagen'] ?>"> </td>
              <td><?php echo $ver['heroe'] ?></td>
              <td><?php echo $ver['power'] ?></td>
              <td><?php echo $ver['nombre'] ?></td>
              <td><?php echo $ver['genero'] ?></td>
              <td><?php echo $ver['publicacion'] ?></td>
            </tr>
            <?php 
                endwhile;
            ?>
          </tbody>
        </table>
        </p>
        <div style="height: 100px"></div>
        <p class="lead mb-0">Taller de aplicaciones web ITM2</p>
      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('#tablaheroes').DataTable();
    });
</script>