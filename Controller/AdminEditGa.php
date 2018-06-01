<?php
	session_start();
	include_once("../Model/Model_Ga.php");
	$id=$_POST['id'];
	$name=$_POST['name'];
	$maGa=$_POST['maGa'];
	$model_Tau=new Model_Ga();
	$cacTau=$model_Tau->suaGa($id,$maGa,$name);
	echo $id;
	echo $name;
	echo $maGa;
	if(!$cacTau) echo "that bai";
	else
	header("Location:AdminGaController.php");
?>