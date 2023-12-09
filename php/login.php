<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Definir valores quemados
    $usuarioQuemado = "Dark";
    $contrasenaQuemada = "Espe2023";

    // Obtener valores del formulario
    $usuarioIngresado = $_POST["username"];
    $contrasenaIngresada = $_POST["password"];

    // Verificar si los valores coinciden con los quemados
    if ($usuarioIngresado == $usuarioQuemado && $contrasenaIngresada == $contrasenaQuemada) {
        header("Location: ../html/inicio.html");
    } else {
        echo "Error: Usuario o contraseña incorrectos.";
        // Aquí puedes redirigir o realizar otras acciones después del inicio de sesión fallido
    }
}
?>
