<!--
22/03/2021    
Aplicación No 11 (Potencias de números)
Sasha Lospalluto
-->

<!-- Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <?php

        function CalculaPotencia($numero, $exponente)
        {            
            return pow($numero, $exponente);
        }


        for ($i=1; $i<=4 ; $i++) 
        {          
            for ($j=1; $j<=4 ; $j++)
            {
                printf("<br>");
                printf("$i elevado al numero $j es ". CalculaPotencia($i,$j));
            }

            printf("<br>");
        }

    ?>

</body>
</html>