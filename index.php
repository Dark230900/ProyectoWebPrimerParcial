<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-image: url(img/fondoLogin2.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 600px;
            height: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            color: #000000;
        }

        input {
            width: 70%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: rgba(176, 82, 82, 0.75);
            color: #ffffff;
            cursor: pointer;
        }
    </style>
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h1>INKA WASI</h1>
    <h2>BIENVENIDO</h2>
    <h4>INICIA SESION</h4>
    <label for="username">Usuario:</label>
    <input type="text" name="username" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required>
    <?php
    // Definir usuarios y contraseñas en un array asociativo
    $usuarios = array(
        "admin" => "admin",
        "Carlos" => "Carlos",
        "Danny" => "Danny"
        // Agrega más usuarios según sea necesario
    );

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener valores del formulario
        $usuarioIngresado = $_POST["username"];
        $contrasenaIngresada = $_POST["password"];

        // Verificar si el usuario existe y la contraseña es correcta
        if (array_key_exists($usuarioIngresado, $usuarios) && $usuarios[$usuarioIngresado] == $contrasenaIngresada) {
            // Redirigir a dashboard.php
            header("Location: html/inicio.html");
            exit();
        } else {
            // Mostrar mensaje de error
            echo '<p style="color: red;">Error: Usuario o contraseña incorrectos.</p>';
        }
    }
    ?>


    <input type="submit" value="Iniciar sesión">
</form>
</body>
</html>
