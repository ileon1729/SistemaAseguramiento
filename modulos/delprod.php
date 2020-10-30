<?php
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

 sleep(4);

 $codeProd= $_POST['prod-code'];
 $cons=  ejecutarSQL::consultar("select * from producto where CodigoProd='$codeProd'");
 $totalproductos = mysql_num_rows($cons);
 $tmp=  mysql_fetch_array($cons);
 $imagen=$tmp['Imagen'];
 if($totalproductos>0){
    if(consultasSQL::DeleteSQL('producto', "CodigoProd='".$codeProd."'")){
        $carpeta='../imagenes/img-products/';
        $directorio=$carpeta.$imagen;
        chmod($directorio, 0777);
        unlink($directorio);
        echo 'El producto se elimino de la tienda con éxito<';
    }else{
        echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
    }
 }else{
     echo 'El código del producto no existe';
 }
