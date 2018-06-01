<?php
include_once("Model_Chung.php");
class Model_Admin extends Model_Chung{

	public function login($username,$password){
		$sql="select count(*) from admin where username = '".$username."' and password = '".$password."'";
		$rs=mysqli_query($this->link,$sql);
		$num=mysqli_fetch_array($rs);
		return $num[0];
	}
}

?>