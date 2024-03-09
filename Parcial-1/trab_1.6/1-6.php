<html>
<body>
<?php
        $n=rand(1 , 100);
        echo "<h4>";
        echo "Los datos de los arreglos serán de: " . $n . "<br>" ;
        echo " </h4>";

        echo "<hr>";
        $suma=0;
        $arreglo1=array();
        $arreglo2=array();
        echo "<table border=1>";
            for($i=0; $i<$n; $i++)
            {
                echo "<td>";
                    array_push($arreglo1 , rand(1 , 5));
                    echo $arreglo1[$i] . "<br> ";
                echo "</td>";

            }

            echo "<tr>";
            for($j=0; $j<$n;  $j++)
                {
                    echo "<td>";
                        array_push($arreglo2 , rand(1 , 5));
                        echo $arreglo2[$j] . "<br> ";
                    echo "</td>";
                }
            echo "</tr>";

            for($z=0; $z<$n; $z++)
            {
                $suma=($arreglo1[$z]+$arreglo2[$z]);
                echo "La suma de este resultado es: " . $suma . "<br>";

            }
           
        echo "</table>"
       
    ?>
</body>
</html>