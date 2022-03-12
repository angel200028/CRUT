<!doctype  html>
<html>
<head>
<title>Consulta  de  programa</title>
<meta  http-equiv="Content-Type"  content="text/html;  charset=utf-8">
<meta  name="viewport"  content="width=device-width,  initial-scale=1, shrink-to-fit=no">
<link  href="css/bootstrap.min.css"  rel="stylesheet"/>
<link  href="miscss/estilos.css"  rel="stylesheet"/>
<script  src="js/bootstrap.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div  id="divconsulta"  class="container">
<br>
<div id="div2">
<div  id="div4"  >
<form  name="formulario"  role="form"  method="post"">
<div  class="col-md-12">
<strong  class="lgris">Ingrese  criterio  de
 
busqueda</strong>
 

<br> <br>
<div  class="form-row">
<div  class="form-group  col-md-3">
 

<div  class="form-group  col-md-3">
<input  class="form-control"  style="text-transform: uppercase;"  type="text"  name="nombres"  value=""  placeholder="nombre"  />
</div>
<div  class="form-group  col-md-3">
<input  class="form-control"  style="text-transform: uppercase;"  type="text"  name="tipo"  value=""  placeholder="tipo"  />
</div>
<div  class="form-group  col-md-3">
<input  class="btn  btn-primary"  type="submit"
 
value="Consultar"  >
 

</div>
</div>
<br>
 
</div>
</form>
<br>
</div>

<div  id="divconsulta2">
<?php
if  ($_SERVER['REQUEST_METHOD']==='POST')
{
include('funciones.php');
$vnombre=$_POST['nombre'];
$vtipo=$_POST['tipo'];
$miconexion=conectar_bd('',  'sena_bd');
$resultado=consulta($miconexion,"select  *  from  programa  where trim(progra_nombre)  like  '%{$vnombre}%'  and  (trim(progra_tipo)  like '%{$vtipo}%')"); if($resultado->num_rows>0)
{
while  ($fila  =  $resultado->fetch_object())
{
echo  $fila->programa_id."  ".$fila->progra_nombre."  ".$fila->progra_tipo." <br>";
}
}
 
else{
    echo "<script>
    alert('NO EXISTEN REGISTROS');
    window.location= 'menu.php'
</script>";
}
$miconexion->close();
}?>
</div>
</div>
</div>
</body>
</html>

mG>Ws]nVy^4#
