<?php 
session_start();

if(isset($_POST['submit']))
{
	$username="edgar";
	$password="airesdelsur";
	if((isset($_POST['user'])) || (isset($_POST['password']))) 
	{
		$nombre=$_POST["user"];
		$pass=$_POST["password"];		
		if(($nombre==$username)&&($pass==$password))
		{
			$_SESSION['username']=$nombre;
			header("location: inicio.php");
		}
		else
		{
		header("location: index.php");
		}
	}
	else
	{
		header("location: index.php");
	}

}
else
{
	header("location: index.php");
}



 ?>



