<?php
    function factorial($numMenor,$numMayor)
    {
        for($i=$numMenor;$i<$numMayor+1;$i++)
        {  
            $resultado[$i]=1;
            for($j=1;$j<=$i;$j++)
                $resultado[$i]=$resultado[$i]*$j;
        }
        return $resultado;
    }