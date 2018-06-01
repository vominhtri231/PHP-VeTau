
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../View/css/Layout.css">
</head>
<body>
	<?php include_once("../View/Share/View_Header.php");?>
	<?php include_once("../View/Share/View_Menu.php");?>
<div style="margin-left: 30px;">
	<form id="search">
		<input type="text" id="input">
		<button type="button" onclick="search()">Tìm kiếm </button>
	</form>
</div>	

	<form method="post" action="AdminVeController.php">
	<div id="tableGa">
		<table id="sv">
			<thead>
			<tr>
				<th>Mã đăng ký</th>
				<th>Mã tàu</th>
				<th>Tên người mua</th>
				<th>Số điện thoại</th>
				<th>Email</th>
				<th>Số chứng minh</th>
				<th>Xóa</th>
			</tr>
			</thead>
				
			<?php

				while($row=mysqli_fetch_array($listGa)){
					
					echo "<tr>";
					echo "<td >".$row[0]."</td>";
					echo "<td >".$row[1]."</td>";
					echo "<td >".$row[2]."</td>";
					echo "<td >".$row[3]."</td>";
					echo "<td >".$row[4]."</td>";
					echo "<td >".$row[5]."</td>";
					 echo  "<td> <input type='checkbox' name='del[]' value='".$row[0]."'></td>";
					echo "</tr>";
				}
			?>
		</table>
		<span style="margin: 710px; padding-top: 30px"><input type="submit" name="buttonDel" value="delete" onclick=" return confirm('Chắc chắn muốn xóa?')"></span>
	</div>

</form>

	<script type="text/javascript">
		function search(){
			var input=document.getElementById("input").value;
			var xmlhttp = new XMLHttpRequest();
		    xmlhttp.onreadystatechange = function() {
		        if (this.readyState == 4 && this.status == 200) {
		            document.getElementById("tableGa").innerHTML = this.responseText;
		        }
		    };
		    xmlhttp.open("GET", "AdminSearchVe.php?input=" + input, true);
        	xmlhttp.send();
		}
	</script>

	<?php include_once("../View/Share/View_Footer.php");?>
</body>
</html>
