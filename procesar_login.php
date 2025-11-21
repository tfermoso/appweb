<?php
if (isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    if ($usuario !== "" && $password == "1234") {
        setcookie("usuario", $usuario, time() + 3600, );
        session_start();
        $_SESSION["usuario"] = $usuario;

        // Asegurar que contador existe como array
        if (!isset($_SESSION["contador"])) {
            $_SESSION["contador"] = [];
        }
        if (!isset($_SESSION["contador"][$usuario])) {

            $_SESSION["contador"][$usuario] = 0;
          

        } else {
            $_SESSION["contador"][$usuario]++;
            
        }
        header("Location: bienvenido.php");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
}

