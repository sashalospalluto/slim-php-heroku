<!--
16/03/2021    
Aplicación No 5 (Números en letras)
Sasha Lospalluto
-->

<!--
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php

    print("<h1>EJERCICIO 5</h1>");

    $num=28;
    $primerNumero = intval($num/10);
    $numEnPalabras;
    $segundoNumero = substr($num, -1); 
    $terminado=0;
       

     switch ($primerNumero) {
        case 2:
            if($num==20)
            {
                $numEnPalabras="veinte";
                $terminado=1;
            }else
            {
                $numEnPalabras="Veinti";            

            }
            break;

        case 3:
            if($num==30)
            {
                $numEnPalabras="Treinta";
                $terminado=1;
            }else
            {
                $numEnPalabras="Treinta y ";
            }
            break;

        case 4:
            if($num==40)
            {
                $numEnPalabras="Cuarenta";
                $terminado=1;
            }else
            {
                $numEnPalabras="Cuarenta y ";
            }
            break;

        case 5:
            if($num==50)
            {
                $numEnPalabras="Cincuenta";
                $terminado=1;
            }else
            {
                $numEnPalabras="Cincuenta y ";
            }
            break;

        case 6:
            if($num==60)
            {
                $numEnPalabras="Sesenta";
                $terminado=1;
            }else
            {
                $numEnPalabras="Sesenta y ";
            }         
            break;
        
        default:
            $numEnPalabras = "Dato ingresado de manera incorrecta";
            $terminado=1;
            break;            
    } 

    if($terminado==0)
    {
        switch ($segundoNumero) {
            case 1:
                $numEnPalabras = $numEnPalabras . "uno";
                break;
            case 2:
                $numEnPalabras = $numEnPalabras . "dos";
                break;
            case 3:
                $numEnPalabras = $numEnPalabras . "tres";
                break;
            case 4:
                $numEnPalabras = $numEnPalabras . "cuatro";
                break;
            case 5:
                $numEnPalabras = $numEnPalabras . "cinco";
                break;
            case 6:
                $numEnPalabras = $numEnPalabras . "seis";
                break;
            case 7:
                $numEnPalabras = $numEnPalabras . "siete";
                break;
            case 8:
                $numEnPalabras = $numEnPalabras . "ocho";
                break;
            case 9:
                $numEnPalabras = $numEnPalabras . "nueve";
                break;
            default:
                $numEnPalabras = "error";
                break;
        }

        print("<br>$numEnPalabras");
    }
    else
    {
        print("<br>$numEnPalabras");
    }

    ?> 
        
</body>
</html>

<!--
Envio los links nuevamente, de los primeros ejercicios por si me equivoqué de link

1 - https://onlinegdb.com/rkRPCc67u
2 - https://onlinegdb.com/S1aKAqT7O
3 - https://onlinegdb.com/HkYZR96XO
4 - https://onlinegdb.com/bSb5bDp9z
-->