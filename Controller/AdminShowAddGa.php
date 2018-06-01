<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../View/Admin/addGa.php");
	}
?>