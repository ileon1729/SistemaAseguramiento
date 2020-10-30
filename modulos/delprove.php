<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$nitProve= $_POST['nit-prove'];
$cons=  ejecutarSQL::consultar("select * from proveedor where NITProveedor='$nitProve'");
$totalprove = mysql_num_rows($cons);

if($totalprove>0){
    if(consultasSQL::DeleteSQL('proveedor', "NITProveedor='".$nitProve."'")){
        echo 'Proveedor eliminado éxitosamente';
    }else{
       echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
    }
}else{
    echo 'El código de proveedor no existe';
}
