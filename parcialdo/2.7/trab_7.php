<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Test</h1>   
        
        <br>
        <div class ="test">
        <form action="login.php" method = "POST">
        <table border = "1">

            <tr>
                <td>Usuario</td>
                <td> <input type="text" name = "Usuario"> </td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td> <input type="text" name = "Contraseña"> </td>
            </tr>
            <tr>
                <td><input type="submit" name = "Enviar"></td>
            </tr>
        </table>
        </form>

        <?php
        if($_POST)
        {
            $conexion = mysqli_connect('localhost','root','','site','3306');
            $hhm1 = $_POST["Usuario"];
            $hhm2 = $_POST["Contraseña"];
            
            $consulta = "select * from usuarios where login = '$hhm1' and password= sha1('$hhm2');";
            $resultado = mysqli_query($conexion, $consulta);

            if($mostrar = mysqli_fetch_array($resultado))
            {
                echo "<h3> Contraseña correcta</h3>";
            }
            else
            {
                echo "<h3> Contraseña incorrecta</h3>";
            }
            mysqli_close($conexion);
        }
        ?>
        </div>
</body>
</html>