<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form method="get" action="#">
            Introduce nombre 
            <input type="text" name="nombre" required><br>
            Introduce un rango de valores desde 
            <input type="number" name="num1" require=d> a <input type="number" name="num2" required>
            <input type="submit" name="enviar">
        </form>
        <?php
            //Calcula factorial con un rango de dos numeros dado por un formulario en la misma página
            require('factorial.php');
            
            if(isset($_GET["enviar"]))//Evaluamos si se ha enviado el formulario
            {
                $nombre=$_GET["nombre"];//Establecemos la variable nombre con el valor del nombre
                $numMenor=$_GET["num1"];//Establecemos la variable numMenor con el valor del num1
                $numMayor=$_GET["num2"];//Establecemos la variable numMayor con el valor del num2
                if($numMenor>$numMayor)//Comprobamos si el numMenor es mayor que el numMayor e intercambiamos
                {
                    $aux=$numMayor;
                    $numMayor=$numMenor;
                    $numMenor=$aux;
                }
                echo 
                    '<table  border="1" cellspacing="0">';
                echo 
                    '<tr>
                        <td colspan="2">
                            Tabla de factoriales del '.$numMenor.' al '.$numMayor.'
                        </td>    
                    </tr>';
                $resultado=factorial($numMenor,$numMayor);  //Llamamos a la funcion que nos devuelve un array con los valores 
                $numero=$numMenor;                          //de los factoriales
                foreach($resultado as $i =>$valor)          //Crear la tabla con los valores del array
                {  
                    echo
                        "<tr>
                            <td>    
                                $numero
                            </td>
                            <td>".
                                $valor."
                            </td>
                        </tr>";
                    $numero++;
                };
                echo 
                    '<tr>
                        <td colspan="2">
                        Nombre del alumno '.$nombre.'
                        </td>    
                    </tr>
                    </table>';
            }
        ?>
    </body>
</html>