<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../Model/Model_Ga.php");
		$gaModel= new Model_Ga();
		$listGa=$gaModel->danhSachGa();
		include_once("../View/Admin/addTau.php");
	}
?>