<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #852e2e;
           
        }
        .cont {
            width: 300px;
            margin: 0 auto;
            padding-top: 50px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
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
    <div class="cont">
        <h2>Iniciar Sesión</h2>
        <form action="log.php" method="post">
            <label for="nameU">Nombre de Usuario:</label>
            <input type="text" id="nameU" name="nameU" required>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nameU = $_POST['nameU'];
        $pass = sha1($_POST['pass']);

        $conexion = mysqli_connect('localhost', 'root', '', 'site', '3306');

        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $sql = "SELECT mart FROM usuarios WHERE nameU = '$nameU' AND pass = '$pass'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['mart']) {
                header("Location: master.php");
            } else {
                header("Location: slave.php");
            }
            exit();
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }

        mysqli_close($conexion);
    }
    ?>
</body>
</html>
