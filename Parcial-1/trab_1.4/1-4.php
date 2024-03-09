<html>
    <body>
     <h1 align="center">13433. Estaciones del Año</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación 
     estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece
     una fecha en especifico compuesta por un día y un mes.
    </p>
    
    <h2>ENTRADA</h2>
    <p>Dos números enteros separados por un espacio que corresponden al día y mes de una fecha determinada</p>
    <h2>SALIDA</h2>
    <p>Una cadena que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida</p>
    <h2>EJEMPLO</h2>
    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">15 <br> 10</td>
            <td align="center">Fall</td>
        </tr>
        <tr >
            <td align="center">22 <br>3</td>
            <td align="center">Spring</td>
        </tr>
        <tr >
            <td align="center">31 <br> 4</td>
            <td align="center">no existe la fecha</td>
        </tr>
    </table>

    <?php
    $d=15;
    $m=10;

    if($m<=3 or $m==12){
        if($d<=1 and $d>=31 and $m==1){
            echo "Invierno";
        }
        else if($d<=1 and $d>=20 and $m==3){
            echo "Invierno";
        }
        else if($d<=1 and $d>=28 and $m==2){
            echo "Invierno";
        }
        else if($d<=21 and $d>=30 and $m==12){
            echo "Invierno";
        }
    }

    else if($m<=3 or $m==6){
        if($d<=21 and $d>=31 and $m==3){
            echo "Primavera";
        }
        else if($d<=1 and $d>=30 and $m==4){
            echo "Primavera";
        }
        else if($d<=1 and $d>=31 and $m==5){
            echo "Primavera";
        }
        else if($d<=1 and $d>=20 and $m==6){
            echo "Primavera";
        }
    }

    else if($m<=6 or $m==9){
        if($d<=21 and $d>=30 and $m==6){
            echo "Verano";
        }
        else if($d<=1 and $d>=31 and $m==7){
            echo "Verano";
        }
        else if($d<=1 and $d>=31 and $m==8){
            echo "Verano";
        }
        else if($d<=1 and $d>=20 and $m==9){
            echo "Verano";
        }
    }

    else if($m<=9 or $m==12){
        if($d<=21 and $d>=30 and $m==9){
            echo "Otoño";
        }
        else if($d<=1 and $d>=31 and $m==10){
            echo "Otoño";
        }
        else if($d<=1 and $d>=30 and $m==11){
            echo "Otoño";
        }
        else if($d<=1 and $d>=20 and $m==12){
            echo "Otoño";
        }
    }
    
?>

<h1 align="center">C. El mayor de tres números </h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Realiza un problema que imprima el mayor de tres números.
    </p>
    
    <h2>ENTRADA</h2>
    <p>Escribe tres números enteros a, b y c </p>
    <h2>SALIDA</h2>
    <p>El número entero mayor de los tres números introducidos.</p>
    <h2>EJEMPLO</h2>
    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">10 8 -7</td>
            <td align="center">10</td>
        </tr>
        <tr >
            <td align="center">10 81 101</td>
            <td align="center">101</td>
        </tr>
        <tr >
            <td align="center">11 11 11</td>
            <td align="center">11</td>
        </tr>
    </table>

    <?php

    $si=7;
    $no=34;
    if($si==7 and $no==7){
        echo "2";
    }
    else if($si!=7 and $no==7){
        echo "1";
    }
    else if($si==7 and $no!=7){
        echo "1";
    }
    else{
        echo "0";
    }

    
?>

<h1 align="center">7294. ¿Cuántos valen 7?</h1>
     
     <h2>DESCRIPCION</h2>
     <p>
     Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
    </p>
    
    <h2>ENTRADA</h2>
    <p>Dos enteros en el rango de -1000 a 1000 .</p>
    <h2>SALIDA</h2>
    <p>La cantidad de enteros iguales a 7.</p>
    <h2>EJEMPLO</h2>
    <table border="1">
        <tr>
            <td><h4>ENTRADA</h4></td>
            <td><h4>SALIDA</h4></td>
        </tr>
        <tr >
            <td align="center">-3 8</td>
            <td align="center">0</td>
        </tr>
        <tr >
            <td align="center">7 57</td>
            <td align="center">1</td>
        </tr>
        <tr >
            <td align="center">62 7</td>
            <td align="center">1</td>
        </tr>
    </table>

    <?php
    $a=1;
    $b=2;
    $c=3;

      if ($a>$b and $a>$c){
        echo $a;
      }
      else if ($b>$a and $b>$c){
        echo $b;
     }
      else if ($c>$a and $c>$b){
        echo $c;
     }
     else if ($a==$c and $a==$b) {
        echo $a;
     }
    


    
?>
    </body>
</html>