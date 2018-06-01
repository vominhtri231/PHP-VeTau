<?php
	session_start();
	$id= $_GET['id'];
	include_once("../Model/Model_Ga.php");
	include_once("../Model/Model_Tau.php");
	$gaModel= new Model_Ga();
	$tauModel= new Model_Tau();
	$tau=$tauModel->getItem($id);
	$arruser = mysqli_fetch_array($tau);
	$listGa= $gaModel->danhSachGa();
	include_once("../View/Admin/EditTau.php");
?>