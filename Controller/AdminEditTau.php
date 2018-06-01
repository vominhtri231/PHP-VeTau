<?php
	session_start();
	include_once("../Model/Model_Tau.php");
	$model_Tau=new Model_Tau();
	
	$gaDen=$_POST['gaDen'];
	$gaDi=$_POST['gaDi'];
	$soLuong=$_POST['soLuong'];
	$ngay=$_POST['ngay'];
	$date= date("Y-m-d",strtotime($ngay));
	$matau= $_POST['maTau'];
	$cacTau=$model_Tau->suaTau($gaDen,$gaDi,$soLuong,$date,$matau);
	if(!$cacTau) echo "that bai";
	else
	header("Location:AdminTauController.php");
?>