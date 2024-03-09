<?php
    $a=array();
    $x=rand(1,1000);
    for($i=0;$i<$x;$i++){
        array_push($a,rand(0,10));
    }
    $prom =0;
    for($i=0;$i<$x;$i++){
        $prom+=$a[$i];
    }
    $prom=$prom/$x;
    $pm=0;
    $pme=0;
    $cr=0;
    $ca=0;
    for($i=0;$i<$x;$i++){
        if($a[$i]<$prom){
            $pm++;
        }
        else{
            $pme++;
        }
        if($a[$i]<6){
            $cr++;
        }
        else{
            $ca++;
        }
    }
    echo "<br>Cant de alumnos ",$x;
    echo "<br> Promedio: ", round($prom, 2) ,"<br>","Aprobados ",$ca,"<br>Reprobados ",$cr,"<br>Mas quel prom ",$pm,"<br>Menos quel prom ",$pme;
    
    
?>
<table border="1">
    <?php
        $cont=0;
        for($i=0; $i<$x/30; $i++)
        {
            echo "<tr>";
            for($j=0; $j<30; $j++)
            {
                if($cont+$j<$x)
                {
                    echo "<td>", $a[$j+$cont], "</td>";
                }  
            }
            $cont=$cont+30;
            echo "</tr>";
        }
    ?>
</table>

</body>
</html>