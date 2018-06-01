<?php
	session_start();
	$id= $_GET['id'];
	include_once("../Model/Model_Ga.php");
	$gaModel= new Model_Ga();
	$listGa=$gaModel->getItem($id);
	$arruser = mysqli_fetch_array($listGa);
	include_once("../View/Admin/EditGa.php");
?>