<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 PHP</title>
</head>
<body>
    <h1>Grafico temperaturas mensuales (sin decimales)</h1>
        <div style="font-family: monospace; font-size: 40px">
        <?php
            $temperaturas = array("Enero" => 12, "Febrero" => 13, "Marzo" => 17, "Abril" => 19,
            "Mayo" => 25, "Junio" => 31, "Julio" => 34, "Agosto" => 34, "Septiembre" => 28, "Octubre"
            => 23, "Noviembre" => 16, "Diciembre" => 13);
            foreach ($temperaturas as $x => $y) {
                echo str_pad($x,15,'-').'>';
                for ($i=0;$i<$y;$i++){
                    echo '<img src = "imagenes/barraTemp.png" style="border: 1px solid black" />';
                }
                echo $y,"ºC","<br>";
            }
        ?>
        </div>
    <h1>Grafico temperaturas mensuales</h1>
        <div style="font-family: monospace; font-size: 40px">
        <?php
           $temperaturas = array("Enero" => 12.5, "Febrero" => 13.9,
           "Marzo" => 14.1, "Abril" => 19, "Mayo" => 25, "Junio" => 31,
           "Julio" => 34.4, "Agosto" => 34.45, "Septiembre" => 28,
           "Octubre" => 23, "Noviembre" => 16, "Diciembre" => 13.346); 
            foreach ($temperaturas as $x => $y) {
                echo str_pad($x,15,'-').'>';
                for ($i=0;$i<floor($y);$i++){
                    echo '<img src = "imagenes/barraTemp.png" style="border: 1px solid black" />';
                }
                for ($i=0;$i<(($y-floor($y))*10);$i++){
                    echo '<img src = "imagenes/decimoBarraTemp.jpg"/>';
                }
                echo $y,"ºC","<br>";
            }
        ?>
        </div>
</body>
</html>