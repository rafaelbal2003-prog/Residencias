<?php
function conect($sql){
    $conexion= new mysqli("localhost","root","","plataformadual");
    $resultado=$conexion->query($sql);
    return $resultado;
}
?>