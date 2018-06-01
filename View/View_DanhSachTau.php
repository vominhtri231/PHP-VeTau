<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../View/css/Layout.css">
</head>
<body>
	<?php include_once("Share/View_Header.php");?>
	<?php include_once("Share/View_Menu.php");?>
	<div id="tableGa">
		<table id="sv">	
		<h2 style="text-align: center;color:#6F1121; ">Các chuyến tàu có thể có</h2>
		<tr>
			<th>Mã tàu</th>
			<th>Ga đến</th>
			<th>Ga đi</th>
			<th>Ngày</th>
			<th>Số vé</th>
			<th>Đăng kí</th>
		</tr>

		<?php 
			while($row=mysqli_fetch_array($cacTau)){
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td> <a href='Controller_DangKi.php?maTau=".$row[0]."'>... </a></td>";
				echo "</tr>";
			}

		?>
	</table>
	<?php include_once("Share/View_Footer.php");?>
</body>
</html>