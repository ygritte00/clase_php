<html>
    <head></head>
    <body>
        
        <?php
        if($_POST)
        {
            echo "<h1>Creo que ya funciona</h1>";
            $x=$_POST['x'];
            $y=$_POST['y'];
            $z=$_POST['z'];

            function f($a)
            {
                $AC=$a*$a*$a;
                $m1=(2*$a);
                $m2=(-3*$a);
                $res= (4*$AC) + g( $m1 , $m2 );
                return $res;
            }

            function g($b,$c)
            {
                $CC=$c*$c;
                $m1=(7*$b-3);
                $m2=($CC+1);
                $res= $m1 % $m2;
                return $res;
            }

            function h($x,$y,$z)
            {
                $res= f($x/$y) +  3*g( $z/$y , $x ) ;
                return $res;
            }

            $res = h($x,$y,$z);
            
            echo $res;
        }
        ?>
        <br>
        <a href="Trabajo2.1.php">Volver</a>
    </body>
</html>