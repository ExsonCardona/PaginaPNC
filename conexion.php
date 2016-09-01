<?php 
	//datos para la coneccion a maysql
define('DB_SERVER', 'mysql.hostinger.es');
define('DB_NAME', 'u108268527_depeo');
define('DB_USER', 'u108268527_depeo');
define('DB_PASS', 'jesus*01');
 
 $con = mysqli_connect(DB_SERVER, DB_USER,DB_PASS);

 
 //$conexion = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
 
 //$con = mysqli_connect('mysql.hostinger.es', 'u365468925_proye', 'paginasweb2015', 'u365468925_proye');

 ?>