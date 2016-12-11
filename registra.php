<?php  
    $username = filter_input(INPUT_POST, "reg_username");
    $password = filter_input(INPUT_POST, "reg_password");
    $conf_password = filter_input(INPUT_POST,"reg_password_confirm");
    $Nombre = filter_input(INPUT_POST,"reg_fullname");
    $genero = filter_input(INPUT_POST,"reg_gender");
    if($password === $conf_password){
    
	if(!filter_input(INPUT_POST, "reg_email",FILTER_VALIDATE_EMAIL)){
	    echo "<script>";
	    echo 'if(confirm("Email Invalido"));';
	    echo "window.history.go(-1)";
	    echo "</script>";
	    $mail = "";
	}else{
	    $mail = filter_input(INPUT_POST, "mail");
	    include("abre_conexion.php");  

	    $_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,pass,gender,mail,username) VALUES ('$Nombre','$password','$genero','$mail','$username')";
	    $conexion_db->query($_GRABAR_SQL); 

	    include("cierra_conexion.php"); 
	}
    }else{
	echo "<script>";
	echo 'if(confirm("Password y confirm password son distintas"));';
	echo "window.history.go(-1)";
	echo "</script>";
    }
?>