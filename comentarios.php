<?php 

	$vNombre=$_POST['nombre'];
	$vEmail=$_POST['correo'];
	$vEmpresa=$_POST['empresa'];
	$vMjs=$_POST['mensaje'];



	 $con = mysqli_connect('mysql.hostinger.es','u108268527_depeo','jesus*01','u108268527_depeo');
  	 

		
	$query = "INSERT INTO comentario (nombre,correo,empresa,mensaje) 
	VALUES ('$vNombre','$vEmail','$vEmpresa','$vMjs')";

	mysqli_query($con,$query);
		
 ?>

 
<script language="javascript">window.location="index.php";</script>
