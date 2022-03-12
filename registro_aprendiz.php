<!doctype  html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title>Registro  de  Aprendices</title>
<meta  http-equiv="Content-Type"  content="text/html;  charset=utf-8">
<meta  name="viewport"  content="width=device-width,  initial-scale=1, shrink-to-fit=no">
<link  href="css/bootstrap.min.css"  rel="stylesheet"/>
<link  href="Estilos.css"  rel="stylesheet"/>
<script  src="js/bootstrap.js"></script>
</head>
<body>
<div  id="div1"  class="container">
<br>
<div id="div2">
<?php  session_start();  if(!  empty($_SESSION['tipo_usuario']))	{  
    ?>
    <img src="img/registro.jpg" width="100" height="100" /><?php  }  ?>
<div  id="div3"  >
 
<?php

if($_SESSION['tipo_usuario']=='ADMINISTRADOR')
{
?>
<form  id="formulario"  role="form"  method="post" action="guardado_aprendiz.php">
<div  class="col-md-12">
<strong  class="lgris">Ingrese  los  datos  del
 
aprendiz</strong>
 

<br>
<label  class="lgris">Identificacion:</label>
<div  class="form-row">

<div  class="form-group  col-xs-2">
<select  class="form-control"  name="tipoid">
<option  value="CC"  selected>CC</option>
<option  value="TI">TI</option>
<option  value="RC">RC</option>
<option  value="PEP">PEP</option>
</select>
 
</div>
<div  class="form-group  col-md-6">
<input  class="form-control  input-lg"  type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACIÓN"  required/>
</div>


<label  class="lgris">Nombres:</label>
<input  class="form-control"  style="text-transform: uppercase;"  type="text"  name="nombres"  value=""  placeholder="Nombres" required/>

<label  class="lgris">Apellidos:</label>
<input  class="form-control"  style="text-transform: uppercase;"  type="text"  name="apellidos"  value=""  placeholder="Apellidos" required/>

<label  class="lgris">Dirección:</label>
<input  class="form-control"  style="text-transform: uppercase;"  type="text"  name="direccion"  value=""  placeholder="DIRECCIÓN" required/>

<label  class="lgris">Teléfono:</label>
 
<input  class="form-control"  type="number" name="telefono" min="9999" max="9999999999999" value="" placeholder="TELÉFONO"  required/>

<label  class="lgris">Ficha:</label>
<input  class="form-control"  type="number"  name="ficha" min="9999"  max="9999999999999"  value=""  placeholder="FICHA"  required/>
<br>
<input  class="btn  btn-primary"  type="submit"
value="Guardar" >

</div>
</form>
<?php
}
else
{
echo  "No  tiene  permisos  para  realizar  esta  acción";
}
?>
 <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="menu.php">ATRAS</a></li>
               
            </div>
<br>
</div>
</div>
</div>
</body>
</html>
