
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../View/css/Layout.css">
</head>
<body>
	<?php include_once("Share/View_Header.php");?>
	<?php include_once("Share/View_Menu.php");?>
	<div style="margin-left: 230px;font-size: 16px">

	<div style="color:red ;font-size:30px">
		<?php
			if($tin!=null){
				if($tin>0){
					echo "Bạn đã đăng kí thành công!";
				}else{
					echo "Đăng kí chưa cthành công!";
				}
			}
		?>
	</div>
	<form action="Controller_XuLyTimTau.php" method="post">
		<label id="title">Ngày đi </label> <input type="date" name="ngayDi"><br>
		<label id="title">Ga đi </label> 
		<select class="custom-select" style="width:130px;" name="gaDi">
			<?php 
				while($ga=mysqli_fetch_array($cacGa)){
					echo '<option value='.$ga[0].'>'.$ga[1].'</option>';
			}
			?>
		</select> <br>
		<?php mysqli_data_seek( $cacGa, 0 );?>
		<label id="title">Ga đến </label> 
		<select class="custom-select" style="width:130px;" name="gaDen">
			<?php 
				while($ga=mysqli_fetch_array($cacGa)){
					echo '<option value='.$ga[0].'>'.$ga[1].'</option>';
			}
			?>
		</select> <br>
		<span style="margin: 80px; 
				    padding: 5px 2px;
					text-decoration: none;
					font-size: 30px;
		">
			<input type="submit" name="buttonDel" value="Tim">
		</span>
	</form>
</div>
	<?php include_once("Share/View_Footer.php");?>
</body>
</html>
