<?php

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: productos1.php');
}

if(isset($_POST['btningresar']))
{
	
	include("../Config/DataBase.php");
	
	$nombre=$_POST['txtusuario'];
	$pass=$_POST['txtpassword'];
	
	$query=mysqli_query($conn,"Select * from usuario where usuario = '".$nombre."' and password = '".$pass."'");
	$nr=mysqli_num_rows($query);
	
	if(!isset($_SESSION['nombredelusuario']))
	{
	if($nr == 1)
	{
		$_SESSION['nombredelusuario']=$nombre;
		header("location: productos1.php");
	}
	else if ($nr == 0)
	{
		echo "<script>alert('Usuario no existe');window.location= 'index.php' </script>";
	}
	}
    if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.php');
}
}
?>