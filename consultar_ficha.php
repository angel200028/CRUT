<!doctype  html>
<html>
<head>
<title>Consulta  de  ficha</title>
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
<form  name="formulario"  role="form"  method="post">
<div  class="col-md-12">
<strong  class="lgris">Ingrese  criterio  de
 
busqueda</strong>
 

<br> <br>
<div  class="form-row">
<div  class="form-group  col-md-3">
 
<input  class="form-control"  type="number"  name="numero" min="9"  max="9999999999999"  value=""  placeholder="NUMERO DE FICHA"  />
</div>
<div  class="form-group  col-md-3">
 
<input  class="form-control"  type="number"  name="programa" min="9"  max="9999999999999"  value=""  placeholder="PROGRAMA"  />
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
$vnuumero=$_POST['numero'];
$vprograma=$_POST['programa'];

$miconexion=conectar_bd('',  'sena_bd');
$resultado=consulta($miconexion,"select  *  from  ficha  where trim(ficha_Numero)  like  '%{$vnumero}%'  and  (trim(ficha_programa)  like '%{$vprograma}%')"); if($resultado->num_rows>0)
{
while  ($fila  =  $resultado->fetch_object())
{
echo  $fila->ficha_numero."  ".$fila->ficha_progra." <br>";
}
}
 
else{
    echo "<script>
    alert('NO EXISTEN REGISTROS');
    window.location= 'url.php'
</script>";
}
$miconexion->close();
}?>
</div>
</div>
</div>
</body>
</html>


