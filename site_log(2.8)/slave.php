<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumno</title>
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
        input[type="text"], input[type="number"], input[type="submit"] {
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
        <h2>Registro de Alumno</h2>
        <?php
        $conexion = mysqli_connect('localhost', 'root', '', 'site', '3306');

        if (!$conexion) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        $alumnoExistente = false;

        $sql = "SELECT * FROM alumnos";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {
            $alumnoExistente = true;
            $alumno = mysqli_fetch_assoc($result);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !$alumnoExistente) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $semestre = $_POST['semestre'];
            $promedio = $_POST['promedio'];
            $direccion = $_POST['direccion'];
            $numero_telefono = $_POST['numero_telefono'];

            $sql = "INSERT INTO alumnos (nombre, apellido, semestre, promedio, direccion, numero_telefono) VALUES ('$nombre', '$apellido', $semestre, $promedio, '$direccion', '$numero_telefono')";
            if (mysqli_query($conexion, $sql)) {
                $alumnoExistente = true;
                $alumno = mysqli_fetch_assoc(mysqli_query($conexion, "SELECT * FROM alumnos"));
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
        }

        mysqli_close($conexion);

        if ($alumnoExistente) {
            echo "<p>Ya existe un alumno registrado:</p>";
            echo "<p><strong>Nombre:</strong> " . $alumno['nombre'] . "</p>";
            echo "<p><strong>Apellido:</strong> " . $alumno['apellido'] . "</p>";
            echo "<p><strong>Semestre:</strong> " . $alumno['semestre'] . "</p>";
            echo "<p><strong>Promedio:</strong> " . $alumno['promedio'] . "</p>";
            echo "<p><strong>Dirección:</strong> " . $alumno['direccion'] . "</p>";
            echo "<p><strong>Número de Teléfono:</strong> " . $alumno['numero_telefono'] . "</p>";
        } else {
            echo '
                <form action="slave.php" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                    <label for="semestre">Semestre:</label>
                    <input type="number" id="semestre" name="semestre" required>
                    <label for="promedio">Promedio:</label>
                    <input type="number" step="0.01" id="promedio" name="promedio" required>
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required>
                    <label for="numero_telefono">Número de Teléfono:</label>
                    <input type="text" id="numero_telefono" name="numero_telefono" required>
                    <input type="submit" value="Registrar Alumno">
                </form>';
        }
        ?>
    </div>
</body>
</html>
