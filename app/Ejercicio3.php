<!-- 
    15/03/2021
    Aplicación No 3 (Obtener el valor del medio)
    Sasha Lospalluto 
    -->

<!--
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php

    $a = 6;
    $b = 7;
    $c = 9;
    
    $maximo = max($a,$b,$c);
    $minimo = min($a,$b,$c);

    if($a != $b && $a != $c && $b != $c)
    {
        if($maximo == $a)
        {
            if($minimo == $b)
            {
                print("El numero del medio es: $c");
            }
            else if($minimo == $c)
            {
                print("El numero del medio es: $b");
            }
        }else if($maximo == $b)
        {
            if($minimo == $a)
            {
                print("El numero del medio es: $c");
            }
            else if($minimo == $c)
            {
                print("El numero del medio es: $a");
            }
    
        } else if($maximo == $c)
        {
            if($minimo == $a)
            {
                print("El numero del medio es: $b");
            }
            else if($minimo == $b)
            {
                print("El numero del medio es: $a");
            }    
        }

    }else
    {
        print("No hay valor del medio");
    } 

    ?>
</body>
</html>