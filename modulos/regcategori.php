<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$codeCateg= $_POST['categ-code'];
$nameCateg= $_POST['categ-name'];
$descripCateg= $_POST['categ-descrip'];

if(!$codeCateg=="" && !$nameCateg=="" && !$descripCateg==""){
    $verificar=  ejecutarSQL::consultar("select * from categoria where CodigoCat='".$codeCateg."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("categoria", "CodigoCat, Nombre, Descripcion", "'$codeCateg','$nameCateg','$descripCateg'")){
            echo 'Categoría añadida éxitosamente';
        }else{
           echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
        }
    }else{
        echo 'El código que ha ingresado ya existe.<br>Por favor ingrese otro código';
    }
}else {
    echo 'Error los campos no deben de estar vacíos';
}
