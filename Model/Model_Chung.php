<?php
	class Model_Chung{
		public $link;
		public function __construct(){
			$this->link=mysqli_connect("localhost","root","") or die("loi ket noi");
			mysqli_select_db($this->link,"tau");
		}
	}
?>