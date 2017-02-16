<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="utf-8">
    <title>Este es el index de nuestro programa</title>
  </head>
  <body>
    <!-- MENU -->
    <table border="2">
      <tr>
        <th>EXAMEN</th>
        <th><a href="index.php">Index</a></th>
        <th>Conferencia oeste</th>
        <th><a href="confeste.php">Conferencia Este</a></th>
        <th><a href="temporada.php">Temporada 99/00</a></th>
      </tr>
    </table>
    <!-- MENU -->

    <table>
      <tr>
      <?php
      //En este apartado incluimos la conexion realida en el otro fichero, y a continuación imprimimos las consultas
      include "dbNBA.php";
      $NBAdb= new dbNBA();
      //Llamamos a lafunción para poder mostar el resultado
      if($NBAdb->getErrorConexion()==false){
        $resultado1=$NBAdb->mostratConfEste();
        while($fila=$resultado1->fetch_assoc()){
          echo "Nombre: ".$fila["Nombre"]."<br>".
          "Ciudad: ".$fila["Ciudad"]."<br>".
          "Division: ".$fila["Division"]."<br>".
          "Conferencia: ".$fila["Conferencia"]."<br><br>";
      }
      }else{
        echo "Esta mal";
      }
      ?>
      </tr>
    </table>
  </body>
</html>
