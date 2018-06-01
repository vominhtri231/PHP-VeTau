<?php
include_once("Model_Chung.php");
class Model_Tau extends Model_Chung{
	public function listAll(){
		$sql = "select * from tau";
		return mysqli_query($this->link,$sql);
	}
	public function danhSachTau($gaDen,$gaDi,$ngayDi){
		$sql="select * from tau where gaDen = '".$gaDen."' and gaDi = '".$gaDi."'";
		if($ngayDi) $sql +=" and ngayDi='".$ngayDi."'";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}

	

	public function themTau($matau,$gaDen,$gaDi,$ngayDi,$soLuongVe){
		$sql="INSERT into tau(maTau,gaDen,gaDi,ngayDi,soLuongVe) values('".$matau."','".$gaDen."','".$gaDi."','".$ngayDi."','".$soLuongVe."')";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}

	public function suaTau($gaDen,$gaDi,$soLuong,$date,$matau){
		$sql="UPDATE tau set gaDen='".$gaDen."', gaDi='".$gaDi."',ngayDi='".$date."',soLuongVe='".$soLuong."' where  maTau like '".$matau."'";

		return mysqli_query($this->link,$sql);
	}
	public function getItem($id){
		$sql="SELECT * from tau where maTau like '".$id."'";
		return mysqli_query($this->link, $sql);
	}
	public function xoaTau($maTau){
		$sql="delete from tau where maTau= ".$maTau;
	}

	public function search($input){
		$sql="select * from tau where gaDen like '%".$input."$' or gaDi like '%".$input."%' or ngayDi like '%".$input."%'";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}
	public function delItem($checkDel){
		$query= "DELETE from tau where maTau = '".$checkDel."'";
			return mysqli_query($this->link,$query);
	}
}

?>
