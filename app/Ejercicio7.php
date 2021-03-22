<!--
18/03/2021    
Aplicación No 7 (Mostrar impares)
Sasha Lospalluto
-->

<!-- Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    
    <?php

        $arrayNumeros = array();
        $valorEncontrado = false;
        $auxNumero = 1;

        for ($i = 0; $i < 10; $i++) 
        { 
            do
            {                        
                if($auxNumero%2 != 0)
                {
                    $arrayNumeros[$i] = $auxNumero;                    
                    $valorEncontrado = true;
                }

                $auxNumero++;

            } while($valorEncontrado == false);

            $valorEncontrado=false;
        }

        printf("<h2> Muestro con for</h2>");
        
        for ($i = 0; $i < 10; $i++) 
        { 
            printf("<br> Numero: $arrayNumeros[$i]");
        }

        printf("<h2> Muestro con while</h2>");
        
        $i = 0;
        while ($i < 10) 
        {
            printf("<br> Numero: $arrayNumeros[$i]");
            $i++;                        
        } 

        printf("<h2> Muestro con foreach</h2>");    

        foreach ($arrayNumeros as $valor) 
        {
            printf("<br> Numero $valor"); 
        }
    ?>

</body>
</html>