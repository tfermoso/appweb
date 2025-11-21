<?php
if (isset($_COOKIE["usuario"])) {
    $usuario = $_COOKIE["usuario"];
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
    <h1>Dashboard</h1>
    <h2>Bienvenido <?=$usuario?></h2>
</body>
</html>