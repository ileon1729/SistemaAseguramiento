<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$nameAd= $_POST['name-admin'];
$consA=  ejecutarSQL::consultar("select * from administrador where Nombre='$nameAd'");
$totalA = mysql_num_rows($consA);

if($totalA>0){
    if(consultasSQL::DeleteSQL('administrador', "Nombre='".$nameAd."'")){
        echo 'Administrador eliminado éxitosamente';
    }else{
       echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
    }
}else{
    echo 'El nombre del administrador no existe';
}
