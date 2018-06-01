<?php
	include_once("../Model/Model_Tau.php");
	$gaDen=$_POST['gaDen'];
	$gaDi=$_POST['gaDi'];
	$ngayDi=$_POST['ngayDi'];
	$model_Tau=new Model_Tau();
	$cacTau=$model_Tau->danhSachTau($gaDen,$gaDi,$ngayDi);
	include_once("../View/View_DanhSachTau.php");
?>