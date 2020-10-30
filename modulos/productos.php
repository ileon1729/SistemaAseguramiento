<?php
include '../conexion/configBD.php';
include '../conexion/consulBD.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php include 'enlaces.php'; ?>
</head>
<body>
    <?php include 'menu.php'; ?>
    <section id="store">
        <div style="margin: -31px 33px">
              <h1>Productos disponibles</h1>
            <div class="row">
                <div class="col-xs-12">
                    <ul id="store-links" class="nav nav-tabs" role="tablist">
                      <li role="presentation"><a href="#all-product" role="tab" data-toggle="tab" aria-controls="all-product" aria-expanded="false">Todos los productos</a></li>
                      <li role="presentation" class="dropdown active">
                        <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Categorías <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">

                          <?php
                            $categorias=  ejecutarSQL::consultar("select * from categoria");
                            while($cate=mysql_fetch_array($categorias)){
                                echo '
                                    <li>
                                        <a href="#'.$cate['CodigoCat'].'" tabindex="-1" role="tab" id="'.$cate['CodigoCat'].'-tab" data-toggle="tab" aria-controls="'.$cate['CodigoCat'].'" aria-expanded="false">'.$cate['Nombre'].'
                                        </a>
                                    </li>';
                            }
                          ?>

                        </ul>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade" id="all-product" aria-labelledby="all-product-tab">
                          <br><br>
                        <div class="row">
                        <?php
                            $consulta=  ejecutarSQL::consultar("select * from producto where Stock > 0");
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
                                echo '<h2>No hay productos en esta categoria</h2>';
                            }
                        ?>
                        </div>
                      </div>

                      <?php
                        $consultar_categorias= ejecutarSQL::consultar("select * from categoria");
                        while($categ=mysql_fetch_array($consultar_categorias)){
                            echo '<div role="tabpanel" class="tab-pane fade active in" id="'.$categ['CodigoCat'].'" aria-labelledby="'.$categ['CodigoCat'].'-tab"><br>';
                                $consultar_productos= ejecutarSQL::consultar("select * from producto where CodigoCat='".$categ['CodigoCat']."' and Stock > 0");
                                $totalprod = mysql_num_rows($consultar_productos);
                                if($totalprod>0){
                                   while($prod=mysql_fetch_array($consultar_productos)){
                                      echo '
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                             <div class="thumbnail">
                                               <img src="assets/img-products/'.$prod['Imagen'].'">
                                               <div class="caption">
                                                 <h3>'.$prod['Marca'].'</h3>
                                                 <p>'.$prod['NombreProd'].'</p>
                                                 <p>$'.$prod['Precio'].'</p>
                                                 <p class="text-center">
                                                     <a href="infoProd.php?CodigoProd='.$prod['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                                     <button value="'.$prod['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                                 </p>

                                               </div>
                                             </div>
                                         </div>
                                         ';
                                   }
                                } else {
                                   echo '<h2>No hay productos en esta categoría</h2>';
                                }
                            echo '</div>';
                        }
                      ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $('#store-links a:first').tab('show');
        });
    </script>
</body>
</html>