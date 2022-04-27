<?php

$conexion = new mysqli("localhost", "root", "","arte");
if($conexion){
    echo "si usted ve este mensaje la db esta abierta";
}else{
    echo "Falla en la conexion";
}
?>
