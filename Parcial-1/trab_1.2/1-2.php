<html>
    <body>
     <h1 align="center">12618. Practicando con formulas</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z.<br>
     Aquí debe ir una fórmula pero me dio flojera escribirla XD.
    </p>
    
    <h2>ENTRADA</h2>
    <p>Un real a. Puedes suponer que 1< a > 100.</p>
    
    <form method="post" action="">
        Numero x:
        <input type="text" name="a"><br>
        <input type="submit" value="Enviar"><br>
    </form>
    
    <h2>SALIDA</h2>
    
    <?php
        if($_POST)
        {
            $a=$_POST['a'];
            $x=(3*$a)+15;
            $y=($x+3)/($x+1);
            $z=((5*$x)+(7*$y))/($a*$x*$y);
            echo "Salida: ", round($z,6); echo "<br>"; 
        }
    ?>
    
    <h2>EJEMPLO</h2>
    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">33.562</td>
            <td align="center">0.148</td>
        </tr>
        <tr >
            <td align="center">72.569</td>
            <td align="center">0.069</td>
        </tr>
        <tr >
            <td align="center">64.835</td>
            <td align="center">0.077</td>
        </tr>
    </table>

</body>
</html>
