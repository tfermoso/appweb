<!DOCTYPE html>
<!-- saved from url=(0041)http://192.168.100.196/formularios/Login/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formularios</title>
</head>

<body>
    <div class="formulario-container">
        <h1>🕹️ Login 🕹️</h1>
        <form id="registroForm" action="procesar_login.php" method="post">
     

            <label for="usuario">Usuario
                <input type="text" name="usuario"  id="usuario" placeholder="Usuario / Email" required="">
            </label>

            <label for="contraseña">Contraseña
                <input type="password" name="password" id="pass1" placeholder="contraseña" required="">
            </label>

            <p id="mensaje">
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "Usuario o contraseña incorrectos.";
            }   
            ?>

            </p>
           
            <input type="submit" name="accion" value="Entrar">
            <input type="submit" name="accion" value="Registrarse">

        </form>
        <script src="script3.js"></script>
    </div>


</body>

</html>