<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../Model/Model_Ga.php");
		$gaModel= new Model_Ga();
		$listGa=$gaModel->danhSachGa();
		$admin= 1;
		if(isset($_POST["buttonDel"])){
			foreach ($_POST["del"] as $checkDel) {
				$delAction= $gaModel->delItem($checkDel);
				if($delAction){
					header("Location:AdminGaController.php");
				}
			}
		}
	}
	include_once("../View/Admin/View_Ga.php");
?>
