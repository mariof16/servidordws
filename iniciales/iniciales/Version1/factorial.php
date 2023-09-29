<?php
    function factorial($i)
                {
                    $resultado=1;
                    for($j=1;$j<=$i;$j++)
                        $resultado=$resultado*$j;
                    return $resultado;
                }