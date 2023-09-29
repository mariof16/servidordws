<?php
     //Calcula factorial con un rango de dos numeros dado por un formulario en una página nueva
                include('factorial.php');
                $nombre=$_GET["nombre"];
                $numMenor=$_GET["num1"];
                $numMayor=$_GET["num2"];
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