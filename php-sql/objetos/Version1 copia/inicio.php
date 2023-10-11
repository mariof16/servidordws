<?php
    //Datos de conexión
    if(isset($_GET["nombre"]) & isset($_GET["enviar"])){
        $nombre=$_GET["nombre"];
        $servidor="localhost";
        $usuario="root";
        $contra="";
        $bbdd="jesuitas";

        //Conecto con la base de datos utilizando los datos de conexión y creando un objeto mysqli
        $mysqli=new mysqli($servidor,$usuario,$contra,$bbdd);
        //Consulta que voy a ejecutar
        //$consulta="Select nombre,firma from jesuita where nombre='".$nombre."'";
        //$consulta="Select Concat(nombre,' ',firma) from jesuita where nombre='".$nombre."'";
        $consulta="Select Concat(nombre,' ',firma) as nombreFirma from jesuita where nombre='".$nombre."'";
        echo $consulta."<br>";

        //Resultado es el conjunto de filas y columnas que nos devuelve la consulta sobre $conexión
        $resultado=$mysqli->query($consulta);
        //Fila es un array de la primera fila de la consulta que esta en resultado
        

        //Meter un if usando num rows igual 0 para comprobar si esta vacio
        if($resultado->num_rows==0){
            echo "<p>No hay datos</p>";
        }else{
             $fila = $resultado->fetch_assoc();
            //Visualizo nombre y firma del array devuelto fila
            /*echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Firma</th>
                </tr> 
                <tr>
                    <td>".$fila["nombre"]."</td>
                    <td>".$fila["firma"]."</td>
                </tr>";
            "</table>";*/
            foreach($fila as $valor)
                echo " Valor: ".$valor."<br>";
        }
        $mysqli->close();
    }
    