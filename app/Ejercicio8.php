<!--
18/03/2021    
Aplicación No 8 (Carga aleatoria)
Sasha Lospalluto
-->

<!-- 
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';    
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>

    <h1>Ejercicio 8</h1>

    <?php
        
        $v[1] = 90; 
        $v[30] = 7; 
        $v['e'] = 99; 
        $v['hola'] = 'mundo';

        foreach ($v as $valor) 
        {
            printf ("$valor");
        }       

    ?>
    
</body>
</html>