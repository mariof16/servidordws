<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            //Crear array
            $array=array("Uno","Dos","Tres","Cuatro");
            
            echo "Mostrar nombres del array:<br>";
            
            echo $array;                        //No podemos mostrar un array entero, solo cada elemento

            print_r($array);                    //Muestra la informacino del array al completo
            echo "<br>";                        //No hay que usarla de cara al público
            
            var_dump($array);                   //Es como print_r pero mas extenso

            unset($array[3]);                   //Quita un elemento del array
            
            for($i=0;$i<count($array);$i++)     //Recorre el array hasta uno menos que el count
                echo "<p>".$array[$i]."</p>";

            echo "<p>Tipo ".gettype($array[0])."</p>"; //gettype($variable) nos da el tipo de variable que es

            foreach($array as $valor)           //Recorre un array($array) y almacena su valor en ($valor)
                echo "<p>Valor ".$valor."</p>"; //Esta es la forma abreviada de escribirlo
            
            foreach($array as $i => $valor)     //Recorre un array($array), almacena su indice en($i) 
                echo "<p>Indice ".$i." valor ".$valor."</p>";       //y almacena su valor en ($valor)
              
        ?>
    </body>
</html>