<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../Model/model_Tau.php");
		$gaDen=$_POST['gaDen'];
		$gaDi=$_POST['gaDi'];
		$soLuong=$_POST['soLuong'];
		$ngay=$_POST['ngay'];
		$maTau=$_POST['maTau'];
		$date= date("Y-m-d",strtotime($ngay));
		
		$model_Tau=new model_Tau();
		$model_Tau->themTau($maTau,$gaDi,$gaDen,$date,$soLuong);
		
		header("Location:AdminTauController.php");
	}
?>