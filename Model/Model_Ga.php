<?php
include_once("Model_Chung.php");
class Model_Ga extends Model_Chung{

	public function danhSachGa(){
		$sql="select * from ga";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}
	public function themGa($maGa,$name){
		$sql= "INSERT INTO ga(maGa,tenGa) values ('".$maGa."', '".$name."')";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}
	public function getItem($id){
		$query="select * from ga where id = '".$id."'";
		return mysqli_query($this->link,$query);
	}
	public function suaGa($id,$maGa,$name){
		$sql="UPDATE ga set maGa='".$maGa."',tenGa='".$name."'where id = '".$id."'" ;
		return mysqli_query($this->link,$sql);
	}

	public function search($input){
		$sql="select * from ga where maGa like '%".$input."%' or tenGa like '%".$input."%'";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}
	public function delItem($checkDel){
		$query= "DELETE from ga where id = '".$checkDel."'";
			return mysqli_query($this->link,$query);
	}
	
}

?>
