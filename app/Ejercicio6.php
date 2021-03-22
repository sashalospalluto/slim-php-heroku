<!--
17/03/2021    
Aplicación No 6 (Carga aleatoria)
Sasha Lospalluto
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./utn.png" />
    <link rel="shortcut icon" type="image/png" href="utn.png">
    <title>Ejercicio6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>

    <?php
        
        $arrayNumeros=array();
        $sumador=0;
        $promedio=0;

        //Ingreso un numero random al array
        for ($i=0; $i < 5; $i++) 
        {             
            $arrayNumeros[$i] = rand(1,10);
            $sumador+=$arrayNumeros[$i];
        }

        /* for ($i=0; $i < 5; $i++) 
        { 
            printf("<br>$arrayNumeros[$i]");
        } */

        $promedio =$sumador /  5;

        //printf("<br>promedio= $promedio");
        //printf("<br> total: $sumador");

        if($promedio == 6)
        {
            printf("<br> El promedio es 6");

        } else if($promedio > 6)
        {
            printf("<br> El promedio es mayor a 6");
        } else
        {
            printf("<br> El promedio es menor a 6");
        }

        //printf("<br>promedio= $promedio");

    ?>

    
</body>
</html>