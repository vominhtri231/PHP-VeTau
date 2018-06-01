<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../Model/Model_Ga.php");
		$name=$_POST['name'];
		$maGa=$_POST['maGa'];
		$model_Tau=new Model_Ga();
		$cacTau=$model_Tau->themGa($maGa,$name);
		header("Location:AdminGaController.php");
	}
?>