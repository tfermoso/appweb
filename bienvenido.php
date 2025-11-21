<?php
/*
if (isset($_COOKIE["usuario"])) {
    $usuario = $_COOKIE["usuario"];
} else {
    header("Location: index.php");
    exit();
}
 */
session_start();

if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    $contador=$_SESSION["contador"][$usuario];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>Usuario: <?= $usuario ?></h2>
        <a href="logout.php">Cerrar sesión</a>
    </header>
    <h1>Dashboard</h1>
    <p>Has accedido <?= $contador ?> veces.</p>
</body>

</html>