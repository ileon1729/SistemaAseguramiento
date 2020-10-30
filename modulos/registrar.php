<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <?php include 'enlaces.php'; ?>
</head>
<body>
    <?php include 'menu.php'; ?>
    <section style="margin: 0 auto; width: 80%">
        <div>
            <div class="row">
                  <h1>Complete los campos</h1>
                <div class="col-xs-12 col-sm-6" style="width: 90%; margin: 0 auto">
                    <div>
                       <form class="form-horizontal FormCatElec" action="/regclien.php" role="form" method="post" data-form="save">
                           <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su número de NIT 14 numeros" required name="clien-nit" data-toggle="tooltip" data-placement="top" title="Ingrese su número de NIT. Solamente números y guiones(-)" maxlength="30" pattern="[0-9-]{14,30}">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Usuario" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)" pattern="[a-zA-Z]{1,9}" maxlength="9">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Nombre" required name="clien-fullname" data-toggle="tooltip" data-placement="top" title="Ingrese sus nombres.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Apellidos" required name="clien-lastname" data-toggle="tooltip" data-placement="top" title="Ingrese sus apellido(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control all-elements-tooltip" type="password" placeholder="Contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Direccion" required name="clien-dir" data-toggle="tooltip" data-placement="top" title="Ingrese la direción en la reside actualmente" maxlength="100">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                <input class="form-control all-elements-tooltip" type="tel" placeholder="Numero de telefónico" required name="clien-phone" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                <input class="form-control all-elements-tooltip" type="email" placeholder="Correo electronico" required name="clien-email" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <p><button type="submit" class="btn btn-success btn-block">registrarme</button></p>
                            <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
