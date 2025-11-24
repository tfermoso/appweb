<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Usuarios</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <a href="bienvenido.php"><img src="img/logo.avif" alt="Logotipo"></a>

        <div class="user-container">
            <h2 class="user-trigger">Usuario: <?= $usuario ?></h2>

            <div id="menu_user" class="menu">
                <a href="ver_usuario.php">Ver usuario</a>
                <a href="logout.php">Cerrar sesión</a>
            </div>
        </div>
    </header>
