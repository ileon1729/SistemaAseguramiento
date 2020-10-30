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
    <section id="infoproduct">
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Tienda</h1>
                </div>
                <?php
                    $CodigoProducto=$_GET['CodigoProd'];
                    $productoinfo=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$CodigoProducto."'");
                    while($fila=mysql_fetch_array($productoinfo)){
                        echo '
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="text-center">Información de producto</h3>
                                <br><br>
                                <h4><strong>Nombre: </strong>'.$fila['NombreProd'].'</h4><br>
                                <h4><strong>Modelo: </strong>'.$fila['Modelo'].'</h4><br>
                                <h4><strong>Marca: </strong>'.$fila['Marca'].'</h4><br>
                                <h4><strong>Precio: </strong>Q'.$fila['Precio'].'</h4>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <br><br><br>

                            </div>
                            <br><br><br>
                            <div class="col-xs-12 text-center">
                                <a href="product.php" class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>Regresar a la tienda</a> &nbsp;&nbsp;&nbsp;
                                <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </section>
</body>
</html>
