<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$nitProve= $_POST['prove-nit'];
$nameProve= $_POST['prove-name'];
$dirProve= $_POST['prove-dir'];
$telProve= $_POST['prove-tel'];
$webProve= $_POST['prove-web'];

if(!$nitProve=="" && !$nameProve=="" && !$dirProve=="" && !$telProve=="" && !$webProve==""){
    $verificar=  ejecutarSQL::consultar("select * from proveedor where NITProveedor='".$nitProve."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("proveedor", "NITProveedor, NombreProveedor, Direccion, Telefono, PaginaWeb", "'$nitProve','$nameProve','$dirProve','$telProve','$webProve'")){
            echo 'Proveedor añadido éxitosamente';
        }else{
           echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
        }
    }else{
        echo 'El número de NIT que ha ingresado ya existe.<br>Por favor ingrese otro número de NIT';
    }
}else {
    echo 'Error los campos no deben de estar vacíos';
}
