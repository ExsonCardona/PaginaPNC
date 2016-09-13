<?php
session_start();
		if (!isset($_SESSION['valido']))
		$_SESSION['valido']=0;
$con = mysqli_connect('localhost','root','','pnc');

$vUsuario = $_POST['user'];   
$vPassword = $_POST['password'];

$result = mysqli_query($con,"SELECT * FROM usuario 
	where user='$vUsuario' and password='$vPassword'");

if($row = mysqli_fetch_array($result))
{     
 if($row["password"] == $vPassword)
 {
  echo "USUARIO VALIDO";
$_SESSION['valido']=1;
$_SESSION['usuario']=$vUsuario;
  header("Location:pdf/com11.pdf");  
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