<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #852e2e;
           
        }
        .container {
            width: 300px;
            margin: 0 auto;
            padding-top: 50px;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type="submit"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        .menu {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .menu a {
            float: right;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div class="menu">
    <a href="log.php">Iniciar Sesión</a>
    <a href="newUser.php">Registrarse</a>
    <a href="index.html">Inicio</a>
</div>
    <div class="container">
        <h2>Registrarse</h2>
        <form action="newUser.php" method="post">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="nameU">Nombre de Usuario:</label>
            <input type="text" id="nameU" name="nameU" required>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="mart">¿Eres maestro?</label>
            <select id="mart" name="mart" required>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
            <input type="submit" value="Registrarse">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $nameU = $_POST['nameU'];
        $pass = sha1($_POST['pass']);
        $correo = $_POST['correo'];
        $mart = $_POST['mart'] == '1' ? true : false;

        $conexion = mysqli_connect('localhost', 'root', '', 'site', '3306');

        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $martValue = $mart ? 1 : 0;
            $sql = "INSERT INTO usuarios (nombre, nameU, pass, correo, mart) VALUES ('$nombre', '$nameU', '$pass', '$correo', $martValue)";


        if (mysqli_query($conexion, $sql)) {
            header("Location: log.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }

        mysqli_close($conexion);
    }
    ?>
</body>
</html>
