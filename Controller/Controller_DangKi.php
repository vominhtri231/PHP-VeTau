<?php
	$maTau=$_GET["maTau"];
	include_once("../Model/Model_Tau.php");
	$model_Tau = new Model_Tau();
	$tau=mysqli_fetch_array($model_Tau->getItem($maTau));
	include_once("../View/View_DangKi.php");
?>