<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_ingresado = trim($_POST['email']);
    $password_ingresada = trim($_POST['password']);

    $email_registrado = isset($_SESSION['nuevo_usuario_email']) ? $_SESSION['nuevo_usuario_email'] : null;
    $password_registrada = isset($_SESSION['nuevo_usuario_password']) ? $_SESSION['nuevo_usuario_password'] : null;

    $email_estatico = "asesor@ejemplo.com";
    $password_estatica = "12345";

    if (
        ($email_ingresado === $email_registrado && $password_ingresada === $password_registrada) ||
        ($email_ingresado === $email_estatico && $password_ingresada === $password_estatica)
    ) {
    
        $_SESSION['logeado'] = true;
        $_SESSION['asesor_email'] = $email_ingresado;
        

        header("Location: index.php");
        exit;
        
    } else {

        header("Location: login.php?error=1");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>