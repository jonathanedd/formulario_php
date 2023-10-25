<?php
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$correo_valido = "usuario@ejemplo.com";
$contrasena_valida = "Contr@seña123";
if ($correo === $correo_valido && strcmp($contrasena, $contrasena_valida) === 0) {
    header("Location: home.php");
    exit();
} else {
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}
?>

