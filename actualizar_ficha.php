<?php
 include('funciones.php');
 session_star();
 $vide=$_session['ide1'];
 $vnumero=$_POST['numero'];
 $vprograma=$_POST['programa'];
 $vdireccion=$_POST['direccion'];
 $vtelefono=$_POST['telefono'];

 $miconexion=conectar_bd('' , 'sena_bd');
 $resultado=consulta ($miconexion, "update programa set ficha_numero='{$vnumero}' ,ficha_progra='{$vprograma}',' where Apre_id='{$vid}'")
 
 if($myconexion->affected_rows>0)
 {
     echo"actualizacion exitosa";
 }
 ?>