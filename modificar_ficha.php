<!doctype  html>
<html>
<head>
<title>Modificación  de  ficha</title>
<meta  http-equiv="Content-Type"  content="text/html;  charset=utf-8">
<meta  name="viewport"  content="width=device-width,  initial-scale=1, shrink-to-fit=no">
<link  href="css/bootstrap.min.css"  rel="stylesheet"/>
<link  href="Estilos.css"  rel="stylesheet"/>
<script  src="js/bootstrap.js"></script>
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
<div  class="form-group  col-md-5">
<input  class="form-control"  type="number"  name="numid"
 
min="9999"  max="9999999999999"  autofocus  value="" placeholder="IDENTIFICACIÓN"  />
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
 
session_start();
$vnumero=$_POST['numero'];
$miconexion=conectar_bd('',  'sena_bd');
$resultado=consulta($miconexion,"select  *  from  ficha where ficha_numero='{$vnumero}'");
if($resultado->num_rows>0)
{
$fila  =  $resultado->fetch_object();
$_SESSION['ide1']=$fila->Apre_id;
?>
<form  id="formulario2"  role="form"  method="post" action="actualizar_ficha.php">
<div  class="col-md-12">
<strong  class="lgris">Datos  de la ficha</strong><br>


<label  class="lgris">Numero:</label>
<input  class="form-control"   type="numer"  min="9" max="9999999999999" name="numero"  required  value="<?php  echo  $fila->ficha_numero?>"/>

<label  class="lgris">programa:</label>
<input  class="form-control"    type="numer"  min="9" max="9999999999999" name="programa"  value="<?php  echo  $fila->ficha_progra ?>"  required/>


<input  class="btn  btn-primary"  type="submit" value="Actualizar"  >
<br>
</div>
</form>
<?php
 
}
else{
echo  "No  existen  registros";
}
$miconexion->close();
}?>
</div>
</div>
</div>
</body>
</html>
