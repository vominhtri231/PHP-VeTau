<?php
	include_once("../Model/Model_Ga.php");
	$model_Ga=new Model_Ga();
	$cacGa=$model_Ga->danhSachGa();
	$tin=isset($_GET["m"])?$_GET["m"]:null;
	include_once("../View/View_TimTau.php");
?>