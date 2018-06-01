
<?php
include_once("Model_Chung.php");
include_once("Model_Tau.php");
class Model_DangKiVe extends Model_Chung{

	public function them($maTau,$tenNguoiMua,$soDienThoai,$email,$soChungMinh){
		$model_Tau=new Model_Tau();
		$rs=$model_Tau->getItem($maTau);
		$tau=mysqli_fetch_array($rs);
		if($tau[4]>0){

			$model_Tau->suaTau($tau[1],$tau[2],$tau[4]-1,$tau[3],$tau[0]);

			$sql="insert into dangkive (maTau, tenNguoiMua, soDienThoai, email, soChungMinh) VALUES ('$maTau','$tenNguoiMua','$soDienThoai','$email','$soChungMinh')";
			return mysqli_query($this->link,$sql);
		}
		return 0;
	}
	public function danhSachVe(){
		$sql= "SELECT * from dangkive";
		return mysqli_query($this->link,$sql);
	}

	public function getItem($maDangKi){
		$sql= "SELECT * from dangkive where maDangKi ='$maDangKi' ";
		return mysqli_query($this->link,$sql);
	}

	public function delItem($maDangKi){
		$dk=mysqli_fetch_array($this->getItem($maDangKi));

		$model_Tau=new Model_Tau();
		$tau=mysqli_fetch_array($model_Tau->getItem($dk[1]));
		$model_Tau->suaTau($tau[1],$tau[2],$tau[4]+1,$tau[3],$tau[0]);

		$sql= "delete from dangkive where maDangKi= '$maDangKi' ";
		return mysqli_query($this->link,$sql);
	}

	public function search($input){
		$sql="select * from dangkive where maTau like '%$input%' or tenNguoiMua like '%$input%' or soDienThoai like '%$input%' or email like '%$input%' or soChungMinh like '%$input%'";
		$rs=mysqli_query($this->link,$sql);
		return $rs;
	}
}

?>