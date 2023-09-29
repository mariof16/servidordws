<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
    <body>
        <div>
            <?php
            for($i=0;$i<6;$i++)
            {
                    $imagenes[$i][0]="img/imagen".$i.".jpg";
                    $imagenes[$i][1]="Nombre".$i;
            }
            $contador=0;
            foreach($imagenes as $dato)
            {
                    echo "
                    <figure>
                        <img src=".$dato[0].">
                        <figcaption>".$dato[1]."</figcaption>
                    </figure>";
            }
            ?>
        </div>
    </body>
</html>