<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Alumnos</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #852e2e;
           
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding-top: 50px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
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
    
    <div class="container">
        <h2>Gestión de Alumnos</h2>
        <h3>Crear Alumno</h3><h5>(recuerda rellenar todo)</h5>
        <form action="master.php" method="post">
            <input type="hidden" name="action" value="add">
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
            <input type="submit" value="Agregar Alumno">
           

        </form>

        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Semestre</th>
                    <th>Promedio</th>
                    <th>Dirección</th>
                    <th>Número de Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect('localhost', 'root', '', 'site', '3306');

                if (!$conexion) {
                    die("Error de conexión: " . mysqli_connect_error());
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $action = $_POST['action'];
                    
                    if ($action == 'add') {
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $semestre = $_POST['semestre'];
                        $promedio = $_POST['promedio'];
                        $direccion = $_POST['direccion'];
                        $numero_telefono = $_POST['numero_telefono'];

                        $sql = "INSERT INTO alumnos (nombre, apellido, semestre, promedio, direccion, numero_telefono) VALUES ('$nombre', '$apellido', $semestre, $promedio, '$direccion', '$numero_telefono')";
                        mysqli_query($conexion, $sql);
                    } 
                    elseif($action == 'mod'){
                        $nombre = $_POST['nombre'];
                        $apellido = $_POST['apellido'];
                        $semestre = $_POST['semestre'];
                        $promedio = $_POST['promedio'];
                        $direccion = $_POST['direccion'];
                        $numero_telefono = $_POST['numero_telefono'];
                        $matricula = $_POST['matricula'];


                        $sql = "UPDATE Alumnos SET nombre= '$nombre',apellido='$apellido',semestre='$semestre',promedio='$promedio',direccion='$direccion',numero_telefono='$numero_telefono'  WHERE matricula='$matricula' ";
                        mysqli_query($conexion, $sql);
                    }
                    elseif ($action == 'delete') {
                        $matricula = $_POST['matricula'];
                        $sql = "DELETE FROM alumnos WHERE matricula = $matricula";
                        mysqli_query($conexion, $sql);
                    }

                }

                $sql = "SELECT * FROM alumnos";
                $result = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['matricula'] . "</td>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>" . $row['apellido'] . "</td>";
                        echo "<td>" . $row['semestre'] . "</td>";
                        echo "<td>" . $row['promedio'] . "</td>";
                        echo "<td>" . $row['direccion'] . "</td>";
                        echo "<td>" . $row['numero_telefono'] . "</td>";
                        echo "<td>
                                <form style='display:inline;' action='master.php' method='post'>
                                    <input type='hidden' name='action' value='delete'>
                                    <input type='hidden' name='matricula' value='" . $row['matricula'] . "'>
                                    <input type='submit' value='Borrar'>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No hay alumnos registrados.</td></tr>";
                }

                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
        <h3>Modificar Alumno</h3><h5>(recuerda rellenar todo)</h5>
        <form action="master.php" method="post">
            <input type="hidden" name="action" value="mod">
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
            <label for="matricula">Matricula</label>
            <input type="text" id="matricula" name="matricula" required>
            <input type="submit" value="Modificar alumno">

        </form>
    </div>
</body>
</html>
