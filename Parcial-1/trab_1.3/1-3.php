<html>
    <body>
     <h1 align="center">5630. Colegiatura</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
        La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este: <br>
        Plan de pagos: <br>
        La colegiatura de los alumnos se determina según el numero de materias que cursan. El costo de cada una de las materias es de $1600.<br>
        Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.


    </p>
    
    <h2>ENTRADA</h2>
    <p>El numero de materias A que Esteban va a cursar. Y un numero B con dos decimales que es el promedio de Esteban.</p>
    <h2>SALIDA</h2>
    <p>Un numero entero C con el precio a pagar. Debe de ir con un $.</p>
    <h2>EJEMPLO</h2>
    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">5<br>9.5</td>
            <td align="center">$5600</td>
        </tr>
        <tr >
            <td align="center">8<br>7.8</td>
            <td align="center">$14848</td>
        </tr>
        <tr >
            <td align="center">2<br>8</td>
            <td align="center">$3712</td>
        </tr>
    </table>

    <?php
    $d=7;
    $m=10;
    $t=0;
    if($m>=9){
        $t=$m*1600;
        $tt=$t-($t*.30);
        echo "Total a pagar: ",$tt;
    }
    else{
        $t=$m*1600;
        $tt=$t=($t*.16);
        echo "Total a pagar: ",$tt;
    }
    ?>
<br>
<?php
    $d=6;
    $m=5;
    $t=0;
    if($m>=9){
        $t=$m*1600;
        $tt=$t-($t*.30);
        echo "Total a pagar: ",$tt;
    }
    else{
        $t=$m*1600;
        $tt=$t=($t*.16);
        echo "Total a pagar: ",$tt;
    }
    ?>
<br>
<?php
    $d=4;
    $m=8.9;
    $t=0;
    if($m>=9){
        $t=$m*1600;
        $tt=$t-($t*.30);
        echo "Total a pagar: ",$tt;
    }
    else{
        $t=$m*1600;
        $tt=$t=($t*.16);
        echo "Total a pagar: ",$tt;
    }
    ?>

</body>
</html>