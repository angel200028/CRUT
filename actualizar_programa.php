<?php
 include('funciones.php');
 session_star();
 $vide=$_session['ide1'];
 $vnombre=$_POST['nombre'];
 $vtipo=$_POST['tipo'];
 

 $miconexion=conectar_bd('' , 'sena_bd');
 $resultado=consulta ($miconexion, "update programa set progra_nombre='{$vnombre}' ,apre_apellidos='{$vtipo}',' where Apre_id='{$vid}'")
 
 if($myconexion->affected_rows>0)
 {
     echo"actualizacion exitosa";
 }
 ?>