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
<hr>
<seccion class="main">
    <h1>Dashboard</h1>
    <hr>
    <table>
        <thead>
            <th>Usuario</th>
            <th>Accesos</th>
            <th>Editar</th>
        </thead>
        <tbody>
            <?php foreach ($contadores as $user => $count): ?>
                <tr>
                    <td><?= htmlspecialchars($user) ?></td>
                    <td><?= $count ?></td>
                    <td>
                        <a href="editar_usuario.php"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="borrar_usuario.php?usuario=<?= urlencode($user) ?>"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="nuevo_usuario.php"><i class="fa-solid fa-user-plus fa-2x"></i></a>
</seccion>

<?php include_once './includes/footer.php'; ?>
</body>

</html>