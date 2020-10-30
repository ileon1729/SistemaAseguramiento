<?php
    session_start();
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>
<section id="container-carrito-compras">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div id="carrito-compras-tienda"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p class="text-center" style="font-size: 80px;">
                    <i class="fa fa-shopping-cart"></i>
                </p>
                <p class="text-center">
                    <a href="pedido.php" class="btn btn-success btn-block">Confirmar pedido</a>
                    <a href="vaciarcarrito.php" class="btn btn-danger btn-block">Vaciar carrito</a>
                </p>
            </div>
        </div>
    </div>
</section>
<nav style="background: grey">
        <div class="row hidden-xs">
            <div class="col-xs-12">
                <div class="contenedor-tabla pull-left">
                    <div class="contenedor-tr">
                        <a href="index.php" class="table-cell-td">Inicio</a>
                        <a href="productos.php" class="table-cell-td">Productos</a>
                        <?php
                            if(!$_SESSION['nombreAdmin']==""){
                                echo '
                                    <a href="configAdmin.php" class="table-cell-td">Administración</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        Carrito de Compras
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-salir">
                                        '.$_SESSION['nombreAdmin'].'
                                    </a>
                                 ';
                            }else if(!$_SESSION['nombreUser']==""){
                                echo '
                                    <a href="pedido.php" class="table-cell-td">Pedido</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        Carrito de Compras
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-salir">
                                        '.$_SESSION['nombreUser'].'
                                    </a>
                                 ';
                            }else{
                                echo '
                                    <a href="registration.php" class="table-cell-td">Registrarme</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        Carrito de Compras
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                        Iniciar Sesion
                                    </a>
                                 ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row visible-xs">
            <div class="col-xs-12">
                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                    Menú
                </button>
                <a href="#" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                    <i class="fa fa-shopping-cart"></i><i class="fa fa-caret-down"></i>
                </a>
                <?php
                if(!$_SESSION['nombreAdmin']==""){echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-salir">
                        '.$_SESSION['nombreAdmin'].'
                    </a>';
                }else if(!$_SESSION['nombreUser']==""){
                    echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-salir">
                        '.$_SESSION['nombreUser'].'
                    </a>';
                }else{
                    echo '
                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs">
                        Iniciar Sesión
                        </a>
                   ';
                }
                ?>
            </div>
        </div>
    </nav>

    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <form action="/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                  <h3>Ingrese sus datos</h3>
                  <div class="form-group">
                      <input type="text" class="form-control" name="nombre-login" placeholder="Usuario" required=""/>
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" name="clave-login" placeholder="Contraseña" required=""/>
                  </div>
                  <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option1" checked>
                        Usuario
                    </label>
                 </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option2">
                         Administrador
                    </label>
                 </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>

    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
        </button>
        <br><br>
        <ul class="list-unstyled text-center">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="product.php">Productos</a></li>
            <?php
                if(!$_SESSION['nombreAdmin']==""){
                    echo '<li><a href="configAdmin.php">Administración</a></li>';
                }elseif(!$_SESSION['nombreUser']==""){
                    echo '<li><a href="pedido.php">Pedido</a></li>';
                }else{
                    echo '<li><a href="registratar.php">registrarme</a></li>';
                }
            ?>
        </ul>
    </div>

    <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
          </div>
      </div>
    </div>

    <div class="modal fade modal-salir" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="/salir.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
