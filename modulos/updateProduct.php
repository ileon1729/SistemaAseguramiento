<?php
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);

$codeOldProdUp=$_POST['code-old-prod'];
$codeProdUp=$_POST['code-prod'];
$nameProdUp=$_POST['prod-name'];
$catProdUp=$_POST['prod-category'];
$priceProdUp=$_POST['price-prod'];
$modelProdUp=$_POST['model-prod'];
$marcaProdUp=$_POST['marc-prod'];
$stockProdUp=$_POST['stock-prod'];
$proveProdUp=$_POST['prod-Prove'];

if(consultasSQL::UpdateSQL("producto", "CodigoProd='$codeProdUp',NombreProd='$nameProdUp',CodigoCat='$catProdUp',Precio='$priceProdUp',Modelo='$modelProdUp',Marca='$marcaProdUp',Stock='$stockProdUp',NITProveedor='$proveProdUp'", "CodigoProd='$codeOldProdUp'")){
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
