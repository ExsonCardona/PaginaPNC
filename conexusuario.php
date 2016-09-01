<?php
session_start();
		if (!isset($_SESSION['valido']))
		$_SESSION['valido']=0;
$con = mysqli_connect('mysql.hostinger.es','u108268527_depeo','jesus*01','u108268527_depeo');

$vUsuario = $_POST['user'];   
$vPassword = $_POST['password'];

$result = mysqli_query($con,"SELECT * FROM usuarios where usua='$vUsuario' and password='$vPassword'");

if($row = mysqli_fetch_array($result))
{     
 if($row["password"] == $vPassword)
 {
  echo "USUARIO VALIDO";
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario;
  header("Location:contenido.php");  
 }
 else
 {
echo "Contraseña incorrecta"  ;   
echo "USUARIO INVALIDO";
		$_SESSION['valido']=0;
 }
}
else
{
 echo "Usuario Incorrecto";
 echo "USUARIO INVALIDO";
		$_SESSION['valido']=0;
         
}


?>