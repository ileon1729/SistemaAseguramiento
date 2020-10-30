<?php
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);

$codeOldCatUp=$_POST['categ-code-old'];
$codeCatUp=$_POST['categ-code'];
$nameCatUp=$_POST['categ-name'];
$descCatUp=$_POST['categ-descrip'];

if(consultasSQL::UpdateSQL("categoria", "CodigoCat='$codeCatUp',Nombre='$nameCatUp',Descripcion='$descCatUp'", "CodigoCat='$codeOldCatUp'")){
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
