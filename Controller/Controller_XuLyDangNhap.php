<?php 
	include_once("../Model/Model_Admin.php");
	$err="";
	$username=$_POST["taiKhoan"];
	$password=$_POST["matKhau"];
	$loginAction=new Model_Admin();
	$num= $loginAction->login($username,$password);
    if($num == 1){
    	session_start();
    $_SESSION["userLogin"] = $username;
		header("Location:AdminTauController.php");
	}else{
		header("Location:Controller_DangNhap.php?m=1");
	}
?>