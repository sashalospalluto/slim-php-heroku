<!--
16/03/2021    
Aplicación No 4 (Calculadora)
Sasha Lospalluto
-->

<!--
    Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php

    print("<h1>EJERCICIO 4</h1>");
    
    $operador='+';
    $op1=4;
    $op2=2;
    $resultado;    

    switch ($operador) 
    {
        case '+':
            $resultado = $op1 + $op2;
            break;
        case '-':
            $resultado = $op1 - $op2;
            break;
        case '*':
            $resultado = $op1 * $op2;
            break;
        case '/':
            if($op2==0)
            {
                $resultado="No se puede dividir por cero";
            }else
            {
                $resultado = $op1 / $op2;
            }            
            break;
        default:
            $resultado="No es un operador valido";
            break;
    }

    print("$resultado");       

    ?>
    
</body>
</html>