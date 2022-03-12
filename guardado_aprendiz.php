<!doctype  html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>Login</title>
<meta  http-equiv="Content-Type"  content="text/html;  charset=utf-8">
<meta  name="viewport"  content="width=device-width,  initial-scale=1, shrink-to-fit=no">
<link  href="css/bootstrap.min.css"  rel="stylesheet"/>
<link  href="Estilos.css"  rel="stylesheet"/>
<link rel="stylesheet" href="Estilo.css">
<script  src="js/bootstrap.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

include('funciones.php');
 $vtipoid=$_POST['tipoid'];
 $vnumid=$_POST['numid'];
 $vnombres=$_POST['nombres'];
 $vapellidos=$_POST['apellidos'];
 $vdireccion=$_POST['direccion'];
 $vtelefono=$_POST['telefono'];
 $vficha=$_POST['ficha'];

 $miconexion=conectar_bd('' , 'sena_bd');
 $resultado=consulta($miconexion, "insert into aprendices (Apre_tipoid,Apre_numid,Apre_nombres,Apre_apellidos,Apre_direccion,Apre_telefono,apre_ficha) values ('{$vtipoid}','{$vnumid}','{$vnombres}','{$vapellidos}','{$vdireccion}',{$vtelefono},{$vficha})");
 if ($resultado)
 {
    echo "<script>
    alert('GUARDADO EXITOSAMENTE');
    window.location= 'registro_aprendiz.php'
</script>";
}
 ?>
 </body>
 </html>