<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../Model/Model_DangKiVe.php");
		$veModel= new Model_DangKiVe();
		$listGa=$veModel->danhSachVe();
		if(isset($_POST["buttonDel"])){
			foreach ($_POST["del"] as $checkDel) {
				$delAction= $veModel->delItem($checkDel);
				if($delAction){
					header("Location:AdminVeController.php");
				}
			}
		}
	}
	include_once("../View/Admin/View_Ve.php");
?>
