<?php
	session_start();
	if(!isset($_SESSION["userLogin"])){
		header("Location:../index.php");	
	}else{
		include_once("../Model/Model_Tau.php");
		$tauModel= new Model_Tau();
		$listGa=$tauModel->listAll();
		$admin= 1;
		
		if(isset($_POST["buttonDel"])){
			foreach ($_POST["del"] as $checkDel) {
				$delAction= $tauModel->delItem($checkDel);
				if($delAction){
					header("Location:AdminTauController.php");
				}
			}
		}
	}
	include_once("../View/Admin/View_Tau.php");
?>
