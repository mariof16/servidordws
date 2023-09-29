<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            //Calcula factorial con un rango de dos numeros
            require('factorial.php');
            $nombre="Mario";
            $numMenor=3;
            $numMayor=3;
            if($numMenor>$numMayor)
            {
                $aux=$numMayor;
                $numMayor=$numMenor;
                $numMenor=$aux;
            }
            echo '<table  border="1" cellspacing="0">';
            echo '<tr>
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
            echo '<tr>
                    <td colspan="2">
                    Nombre del alumno '.$nombre.'
                    </td>    
                </tr>
                </table>';
            ?>
    </body>
</html>