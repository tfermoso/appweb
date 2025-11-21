<?php
if (isset($_POST["usuario"])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    if ($usuario == "admin" && $password == "1234") {
        setcookie("usuario", $usuario, time() + 3600,);
        header("Location: bienvenido.php");
        exit();
    } else {
        header("Location: index.php?error=1");
        exit();
    }
}

