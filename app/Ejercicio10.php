<!--
18/03/2021    
Aplicación No 10 (Arrays de Arrays)
Sasha Lospalluto
-->

<!-- Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    
    <?php
       
        $lapicera = array ("Lapicera1" => array ("color" => "Rojo","marca" => "bic","trazo"=>"fino","precio" => "20"),
        "Lapicera2" => array ( "color" => "azul","marca" => "maped","trazo" => "grueso","precio" => "15"),
        "Lapicera3" => array ( "color" => "negro","marca" => "paper","trazo" => "normal","precio" => "10"));
        
        foreach($lapicera as $key=>$value)
        {
            printf("<br><br>");
            printf($key);  
            printf("<br> Color:");          
            printf($lapicera["$key"]["color"]);
            printf("<br> Marca: ");  
            printf($lapicera["$key"]["marca"]);
            printf("<br> Trazo: "); 
            printf($lapicera["$key"]["trazo"]);
            printf("<br> Precio: $"); 
            printf($lapicera["$key"]["precio"]);               
        }        

    ?>
    
</body>
</html>