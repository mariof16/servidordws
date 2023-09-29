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
            if(isset($_GET["enviar"]))
            {
                $nombre=$_GET["nombre"];
                $numMenor=$_GET["num1"];
                $numMayor=$_GET["num2"];
                if($numMenor>$numMayor)
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
                for($i=$numMenor;$i<$numMayor+1;$i++)
                {  
                    $factorial=factorial($i);
                    echo
                        "<tr>
                            <td>    
                                $i
                            </td>
                            <td>    
                                $factorial
                            </td>
                        </tr>";
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