<?php
    if(!empty($_POST["nombre"]))
    {
        echo "<p>Nombre: ".$_POST["nombre"]."</p>";
       
    }
    if(!empty($_POST["fechanacimiento"]))
    {
        echo "<p>Fecha Nacimiento: ".$_POST["fechanacimiento"]."</p>";
    }
    if(isset($_POST["check"])){
        foreach($_POST["check"] as $valor){
            echo "<p>".$valor."</p>";
        }
    }

    if(isset($_POST["pedirenlinea"])){
        echo "<p>Pedir en Linea: ".$_POST["pedirenlinea"]."</p>";
    }

    if(!empty($_POST["opinion"])){
        echo "<p>Opinion: ".$_POST["opinion"]."</p>";
    }