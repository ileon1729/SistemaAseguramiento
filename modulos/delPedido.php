<?php
session_start();
include '../conexion/configBD.php';
include '../conexion/consulBD.php';

sleep(5);
$NumPedidoDel= $_POST['num-pedido'];
$consP=  ejecutarSQL::consultar("select * from venta where NumPedido='$NumPedidoDel'");
$totalP= mysql_num_rows($consP);

if($totalP>0){
    if(consultasSQL::DeleteSQL('venta', "NumPedido='".$NumPedidoDel."'")){
        consultasSQL::DeleteSQL("detalle", "NumPedido='".$NumPedidoDel."'");
        echo 'Pedido eliminado éxitosamente';
    }else{
       echo 'Ha ocurrido un error.<br>Por favor intente nuevamente';
    }
}else{
    echo 'El pedido no existe';
}
