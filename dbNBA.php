<?php
/**
FICHERO PARA ALMACENAR LA CONEXIÓN Y NO UTILIZARLA CADA VEZ, A TRAVÉS DE UNA CLASE LLAMADA dbNBA
 */
class dbNBA{
  private $conexion;
  private $errorConexion=false;

  function __construct(){
    $this->conexion = new mysqli("localhost", "root", "root", "nba");
    if ($this->conexion->connect_errno){
      $this->errorConexion=true;
    }
  }
  public function getErrorConexion(){//Funcion para comprobacion de errores
    return $this->errorConexion;
  }
  public function mostratEquipos(){//Función para mostar todos los apartados de la tabla equipos
   return $this->conexion->query("SELECT * FROM equipos");
 }
 public function mostratConfEste(){//Función para mostar los datos pero de la conferencia este
  return $this->conexion->query("SELECT Nombre,Ciudad,Division,Conferencia FROM equipos WHERE conferencia='East'");
}
public function mostraTemporada($temporada){//Funcion para mostar los puntos y partidos, pero de la liga 99/00
 return $this->conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante FROM partidos WHERE temporada='".$temporada."'");
}
}

?>
