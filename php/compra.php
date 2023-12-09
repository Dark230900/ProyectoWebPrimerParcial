<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-image: url(../img/fondotinto.jpg);
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            margin: 0 auto;
            padding: 0;
        }
        body h1{
            text-align: center;
            font-size: 80px;
            margin: 1px;
        }
        body h2{
            text-align: center;
            font-size: 40px;
            margin: 1px;
        }
        section{
            justify-content: center;
            display: flex;
            background-image: url(../img/fondoSection.jpg);
            background-size: cover;
            width: 99%;
            height: 10%;
            margin: 1px;
            padding: 20px;
        }
        header{
            text-align: center;
            display: flex;
            margin: 10px; /* Elimina el margen */
            padding: 0; /* Elimina el relleno */
        }

        #izq{
            color: white;
            flex: 1;
            text-align: left;
            font-size: 100px;
        }
        #der{
            color: white;
            flex: 1;
            text-align: right;
            font-size: 100px;
        }
        nav {
            background-color: black;
            width: 99%;
            height: 10%;
            margin-top: 20px;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            display: flex; /* Añadido para que los elementos estén en una sola línea */
            justify-content: center; /* Opcional: para centrar los elementos en el nav */
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 40px; /* Espaciado entre elementos, ajusta según sea necesario */
            padding: 1.5em 1.5em; /* Agregamos relleno para que sea más fácil hacer clic y ver el área afectada */

            transition: background-color 0.3s; /* Agregamos una transición de color de fondo para que sea suave */
        }

        nav a:hover {
            background-color: darkgrey; /* Cambia este color al que prefieras al pasar el puntero */
            color: #ffffff; /* Cambiamos el color del texto al pasar el ratón */
        }

        footer {
            padding: 25px;
            text-align: center;
            background-image: url(../img/fondofooter.jpg);
            background-size: cover;
        }
        body h1{
            color: #ffffff;
        }

    </style>
    <meta charset="UTF-8">
    <title>Inka Wasi</title>
</head>
<body>
<h1>LICORERIA</h1>
<header>
    <h1 id="izq">INKA</h1>
    <img src="../img/logo.png" width="20%">
    <h2 id="der">WASI</h2>
</header>
<h2 style="color: white">"Tu destino exclusivo para experiencias líquidas inolvidables."</h2>

<nav>
    <ul>
        <li><a href="../html/inicio.html">INICIO</a></li>
        <li><a href="../html/nosotros.html">NOSOTROS</a></li>
        <li><a href="../html/sucursales.html">SUCURSALES</a></li>
        <li><a href="../html/catalogo.html">CATALOGO</a></li>
        <li><a href="../html/promociones.html">PROMOCIONES</a></li>
        <li><a href="../html/contactos.html">CONTACTO</a></li>
    </ul>
</nav>
<br>
<h1 style="font-size: 30px">Un motorizado se contactara contigo para coordinar el punto de entrega</h1><br>
<section>
    <div style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px; margin: auto; max-width: 700px;">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos del formulario
            $nombres = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $fecha_nacimiento = $_POST["fecha_nacimiento"];
            $direccion = $_POST["direccion"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];
            $metodo_pago = $_POST["metodo_pago"];
            $producto = $_POST["producto"];

            echo "<h2 style='text-align: center; color: #333;'>Resumen de la Compra</h2>";
            echo "<ul style='list-style: none; padding: 0;'>";
            echo "<li><strong>Nombres:</strong> $nombres</li>";
            echo "<li><strong>Apellidos:</strong> $apellidos</li>";
            echo "<li><strong>Fecha de Nacimiento:</strong> $fecha_nacimiento</li>";
            echo "<li><strong>Dirección:</strong> $direccion</li>";
            echo "<li><strong>Número de Teléfono:</strong> $telefono</li>";
            echo "<li><strong>Correo Electrónico:</strong> $correo</li>";
            echo "<li><strong>Método de Pago:</strong> $metodo_pago</li>";
            echo "<li><strong>Producto:</strong> $producto</li>";
            echo "</ul>";
        }
        ?>
    </div>
</section>


<footer>
    <p>2023 Inka Wasi. Todos los derechos reservados.</p>
</footer>
</body>
</html>
