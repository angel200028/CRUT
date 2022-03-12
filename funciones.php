<?php
  function conectar_bd($clave,$sena_bd)
  {
      $conexion =new mysqli("localhost" , "root" , $clave, $sena_bd) ;

      if ($conexion->connect_error)
      {
          die("error de conexion (". $conexion->connect_errno . ") " . $mysqli->connect_error );

      }
      return $conexion;

  }
  function consulta ($conexion,$consulta_sql)
  {
      $resultado=$conexion->query($consulta_sql);
      if (!$resultado)
      {
          echo "no se puede ejecutar la consulta " .$conexion->error;
          exit;
      }
      return $resultado;
    }
  ?>