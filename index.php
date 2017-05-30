<?php
  include 'Constantes.php';
  include 'Librerias.php'; 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id=nombre>Chilean Way</div>
        <br>
        <div id=saludo>-------------Bienvenido!-------------</div>
        <br>
        <br>
        <div>Aqui encontraras la lista de campeonatos disponibles:</div>
        <a href=""  >--Campeonatos--</a> 
           
        <?php
            $oCamp= new Campeonato();
            while($obj=$oCamp->ListaCampeonatos())
            {
                var_dump($obj);
            }
        ?>
        
    </body>
</html>
