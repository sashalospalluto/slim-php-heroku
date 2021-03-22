<!-- https://onlinegdb.com/B1hqXOa7_ -->

<!-- Ejercicio 1
Sasha Lospalluto -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*Aplicación No 1 (Sumar números)
        Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
        supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
        se sumaron.*/
        $suma=0; 
        $a = 1000;
        $contador=1;
        $salir = 'n';
        
        print("<h1>EJERCICIO 1</h1>");
       
        do 
        {   
            if($suma + $contador < 1000)
            {
                $suma = $suma + $contador;
                print("<br>Número: $contador");
                $contador ++;
            }
            else
            {
                $contador--;
                $salir = 's';
            }

        }while ($salir == 'n');
        
        print("<br>La cantidad de números sumados es: $contador");

    ?>

</body>
</html>