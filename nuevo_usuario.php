<?php
session_start();
if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    $contador = $_SESSION["contador"][$usuario];
    $contadores = $_SESSION["contador"];
} else {
    header("Location: index.php");
    exit();
}
if (isset($_POST["nuevo_usuario"])) {

    $nuevo_usuario = trim($_POST["nuevo_usuario"]);
    if ($nuevo_usuario !== "" && !isset($_SESSION["contador"][$nuevo_usuario])) {
        $_SESSION["contador"][$nuevo_usuario] = 0;
        header("Location: bienvenido.php");
        exit();
    } else {
        $error = "El nombre de usuario ya existe.";
    }
}

?>
<?php include_once './includes/cabecera.php'; ?>
<seccion class="main">
    <form action="" method="post">
        <h2>Nuevo Usuario</h2>
        <label for="nuevo_usuario">Usuario:
            <input type="text" name="nuevo_usuario" id="nuevo_usuario" required>
        </label>
        <br>
        <input type="submit" value="Crear Usuario">
    </form>
    <p>
        <?php if (isset($error))
            echo $error; ?>
    </p>
</seccion>

<?php include_once './includes/footer.php'; ?>
</body>

</html>