<?php

class Diasemana {

static $nombredias=array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

  public static function diasem ($fecha) {
    $dia=date("w", strtotime($fecha));
    echo self::$nombredias[$dia];
  }

}

?>
