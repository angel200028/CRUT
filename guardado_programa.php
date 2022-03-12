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

 $vnombre=$_POST['nombre'];
 $vtipo=$_POST['tipo'];
 

 $miconexion=conectar_bd('' , 'sena_bd');
 $resultado=consulta($miconexion, "insert into programa (,progra_nombre,progra_tipo) values ('{$vnombre}','{$vtipo})");
 if ($resultado)
 {
    echo "<script>
    alert('GUARDADO EXITOSAMENTE');
    window.location= 'url.php'
</script>";
}
 ?>
 </body>
 </html>