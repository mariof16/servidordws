<?php
    if(!empty($_GET["nombre"]) && !empty($_GET["fechanacimiento"]))
    {
        echo "<p>Nombre: ".$_GET["nombre"]."</p>";
        echo "<p>Fecha Nacimiento: ".$_GET["fechanacimiento"]."</p>";
    }
    if(isset($_GET["check"])){
        foreach($_GET["check"] as $valor){
            echo "<p>".$valor."</p>";
        }
    }

    if(isset($_GET["pedirenlinea"])){
        echo "<p>Pedir en Linea: ".$_GET["pedirenlinea"]."</p>";
    }

    if(!empty($_GET["opinion"])){
        echo "<p>Opinion: ".$_GET["opinion"]."</p>";
    }