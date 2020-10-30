<?php
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);

$numPediUp=$_POST['num-pedido'];
$estadPediUp=$_POST['pedido-status'];


if(consultasSQL::UpdateSQL("venta", "Estado='$estadPediUp'", "NumPedido='$numPediUp'")){
    echo '
    <br>
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}else{
    echo '
    <br>
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}
