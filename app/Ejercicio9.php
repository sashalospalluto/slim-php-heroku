<!--
18/03/2021    
Aplicación No 9 (Arrays asociativos)
Sasha Lospalluto
-->

<!-- Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    
    <?php
          
        $lapicera1 ["color"] = "negro";
        $lapicera1 ["marca"] = "maped";
        $lapicera1 ["trazo"] = "grueso";
        $lapicera1 ["precio"] = "10";
        
        $lapicera2 ["color"] = "Rojo";
        $lapicera2 ["marca"] = "bic";
        $lapicera2 ["trazo"] = "fino";
        $lapicera2 ["precio"] = "22";

        $lapicera3 ["color"] = "azul";
        $lapicera3 ["marca"] = "sharpie";
        $lapicera3 ["trazo"] = "medio";
        $lapicera3 ["precio"] = "30";

        
        foreach($lapicera1 as $key => $value)
        {
            print "$key : $value <br>";
        }
        
        print("<br>");

        foreach($lapicera2 as $key => $value)
        {
            print "$key : $value <br>";
        }

        print("<br>");

        foreach($lapicera3 as $key => $value)
        {
            print "$key : $value <br>";
        } 

        print("<br>");

    ?>
    
</body>
</html>