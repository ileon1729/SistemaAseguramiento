<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$codeCateg= $_POST['categ-code'];
$cons=  ejecutarSQL::consultar("select * from categoria where CodigoCat='$codeCateg'");
$totalcateg = mysql_num_rows($cons);

if($totalcateg>0){
    if(consultasSQL::DeleteSQL('categoria', "CodigoCat='".$codeCateg."'")){
        echo 'Categoría eliminada';
    }else{
       echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
    }
}else{
    echo 'El código de la categoria no existe';
}
