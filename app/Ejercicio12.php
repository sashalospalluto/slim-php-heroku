<!--
22/03/2021    
Aplicación No 12 (Invertir palabra)
Sasha Lospalluto
-->

<!-- Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio12</title>
</head>
<body>
    <?php

        $palabra=array("almohadon");
        $cant = count($palabra);
        $palabraInvertida=array();

        for ($i=$cant; $i <=0; $i++) 
        {             
            array_push($palabraInvertida,$palabra[$i]);
        }

        print("la palabra" . $palabra . "al reves se escribe" . $palabraInvertida);

    ?>
</body>
</html>