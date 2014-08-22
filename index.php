<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/estilo.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
</head>

<body>
<?php $f_usuario= isset($_POST['f_usuario'])? $_POST['f_usuario']: NULL;
$f_contra= isset($_POST['f_contra'])? $_POST['f_contra']: NULL;
echo "el usuario es".$f_usuario."y la contraseña es".$f_contra;
?> 
<div class="contenedora">
<div class="contenedora2">
    <div id="bloquea">
    
        <div id="columnah">URL PANEL</div>
 		<div id="columnav">
        <img src="imagenes/rulo1.png" />
        </div>
    </div>
    
    <div id="bloqueb">
   
   <form id="f_acceso" name="f_acceso" action="acceso.php" method="POST" onsubmit= "return validarFormulario();">
<div class="caja1">
	<label for="textfield">USUARIO:</label>
	<input type="text" name="f_usuario" id="f_usuario">
    <br />
    <div class="imagen1">
 <img src="imagenes/rulo22.png" width="231"class="caja1" /></div>
</div>
<br>
	<div class="caja2">
<label for="textfield">CONTRASEÑA:</label>
<input type="text" name="f_contra" id="f_contra">
<br />
 <img src="imagenes/rulo22.png" width="231"class="caja2" /></div>
<br>
	<div class="caja3">
<input type="submit" name="f_boton" id="f_boton" value="INICIAR">
</div>
</form>
</div>

</div>
<div id="mensajeError" style="color:#00F; font-size:18px;"></div>
<script>
$("#f_usuario").focus();
function validarFormulario(){
	var f_usuario = $("#f_usuario").val();
	var f_contra = $("#f_contra").val();
	
	var f_usuario_cantidad = f_usuario.lenght;
	var f_contra_cantidad = f_contra.lenght;
	if(f_usuario == ""){
		$("#mensajeError").html("<strong>ALERTA</strong> usted no ingreso el usuario"); 
		return false;
	}
	if(f_contra == ""){
		$("#mensajeError").html("<strong>ALERTA</strong> usted no ingreso la contraseña");
		return false;
	}
		
return true;
}
</script>

</body>
</html>