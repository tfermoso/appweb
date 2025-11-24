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
    $contadores = $_SESSION["contador"];
} else {
    header("Location: index.php");
    exit();
}
?>
<?php include_once './includes/cabecera.php'; ?>
<seccion class="main">
    
</seccion>

<?php include_once './includes/footer.php'; ?>
</body>

</html>