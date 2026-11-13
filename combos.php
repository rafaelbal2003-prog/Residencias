<?php
include_once('conexion.php');

function combo_empresas(){
    $resultado=conect('SELECT * FROM empresas');
    if($resultado){
        $opcion='';
        while($fila=$resultado->fetch_assoc()){
            $opcion.='<option value='.$fila['id_empresa'].' >'. $fila['nombre'] .'</option>';
        }
        return $opcion;
    }
}

?>