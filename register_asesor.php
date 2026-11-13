<?php
include_once('conexion.php');

if(isset($_POST['nombres'])&&isset($_POST['apellidos'])){
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $id_empresa=$_POST['id_empresa'];

    $resultado=conect("INSERT INTO asesores(nombres,apellidos,correo,contrasena,id_empresa) VALUES('$nombres','$apellidos','$correo','$contrasena','$id_empresa')");
    if($resultado){
        header('Location: login.php');
    }else{
        echo "No se logro insertar al asesor";
    }

}else{
    echo "Se perdieron los datoss";
}

?>