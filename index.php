<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include '/modulos/enlaces.php'; ?>
</head>
<body>
    <?php include '/modulos/menu.php'; ?>
    <section class="seccion">
         <div>
              <h1>Bienvenido</h1>
            <div class="row">
              <?php
              include '../conexion/configBD.php';
              include '../conexion/consulBD.php';
                  $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
                  $totalproductos = mysql_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysql_fetch_array($consulta)){
                         echo '
                        <div class="col-xs-12 col-sm-6 col-md-4">
                             <div class="thumbnail">
                               <img width="301px" src="imagenes/img-products/'.$fila['Imagen'].'">
                               <div class="caption">
                                 <h3>'.$fila['Marca'].'</h3>
                                 <p>'.$fila['NombreProd'].'</p>
                                 <p>Q '.$fila['Precio'].'</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>
                         ';
                     }
                  }else{
                      echo '<h2>No hay productos disponibles</h2>';
                  }
              ?>
            </div>
         </div>
    </section>
</body>
</html>
