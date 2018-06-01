<?php 
	$maTau=$_POST["maTau"];
	$ten=$_POST["ten"];
	$soDienThoai=$_POST["soDienThoai"];
	$email=$_POST["email"];
	$cmnd=$_POST["cmnd"];
	
	
	include_once("../Model/Model_DangKiVe.php");
	$model_DangKiVe=new Model_DangKiVe();
	$res=$model_DangKiVe->them($maTau,$ten,$soDienThoai,$email,$cmnd);
	//echo $res;
	
	header("Location:Controller_TimTau.php?m=".$res);
 ?>