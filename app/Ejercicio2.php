<!-- 
15/03/2021
Aplicación No 2 (Mostrar fecha y estación)
Sasha Lospalluto 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php
    
    /*
    Aplicación No 2 (Mostrar fecha y estación)
    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
    distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
    año es. Utilizar una estructura selectiva múltiple.
    */

    $fecha = date('d-m-Y');
    $fechaAux = date("d-m" , strtotime($fecha));
    $mesDeLaFecha = date ("m", strtotime($fecha));
    $otonio = date ("21-03");
    $primavera = date ("21-09");
    $verano = date ("21-12");
    $invierno = date ("21-06");

    print("la fecha es $fecha <br>");
    
    //Realizo los distintos formatos
    $fecha_formato1 = date('Y/m/d', strtotime($fecha));
    $fecha_formato2 = date('d-m-Y', strtotime($fecha));
    $fecha_formato3 = date('l-F-Y', strtotime($fecha));

    //muestro los formatos
    print("<br>$fecha_formato1");
    print("<br>$fecha_formato2");
    print("<br>$fecha_formato3<br>");

    switch ($mesDeLaFecha) 
    {
        case 1:
        case 2:          
        case 3:

           if($fechaAux < $otonio)
           {
                print("Es Verano");
           }else
           {
               print(" Es Otoño");
           }            
            break;

        case 4:
        case 5:
        case 6:
           if($fechaAux< $invierno)
           {
                print("Es Otoño");
           }else
           {
               print("Es Invierno");
           }            
            break;

        case 7:
        case 8:
        case 9:
            
            if($fechaAux < $primavera)
            {
                 print("Es Invierno");
            }else
            {
                print("Es Primavera");
            }            
            break;

        case 10:
        case 11:
        case 12:

            if($fechaAux < $verano)
            {
                print("Es Primavera");
            }else
            {
                print("Es Verano");
            }            
            break;

        default:
            print("error, mes invalido");
            break;
    }

    ?>    
    
</body>
</html>