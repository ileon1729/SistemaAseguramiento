<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$nameAdmin= $_POST['admin-name'];
$passAdmin= md5($_POST['admin-pass']);

if(!$nameAdmin=="" && !$passAdmin==""){
    $verificar=  ejecutarSQL::consultar("select * from administrador where Nombre='".$nameAdmin."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("administrador", "Nombre, Clave", "'$nameAdmin','$passAdmin'")){
            echo 'Administrador añadido éxitosamente';
        }else{
           echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
        }
    }else{
        echo 'El nombre que ha ingresado ya existe.<br>Por favor ingrese otro nombre';
    }
}else {
    echo 'Error los campos no deben de estar vacíos';
}
