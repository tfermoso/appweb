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
    $contador = $_SESSION["contador"][$usuario];
  
} else {
    header("Location: index.php");
    exit();
}
?>
<?php include_once './includes/cabecera.php'; ?>
<seccion class="main">
    <label for="">Usuario:</label>
    <span><?= htmlspecialchars($usuario) ?></span>
    <br>
    <label for="">Contador: </label>
    <span><?= $contador ?></span>
</seccion>

<?php include_once './includes/footer.php'; ?>
</body>

</html>