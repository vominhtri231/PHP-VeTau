
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
	

	<form method="post" action="AdminTauController.php">
	<div id="tableGa">
		<table id="sv">
			<thead>
			<tr>
				<th>Mã tàu</th>
				<th>Ga đến</th>
				<th>Ga đi</th>
				<th>Thời gian</th>
				<th>Số lượng</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			</thead>
			<?php mysqli_data_seek( $listGa, 0 );
			?>
			<?php
				while($row=mysqli_fetch_array($listGa)){
					echo "<tr>";
					echo "<td >".$row[0]."</td>";
					echo "<td >".$row[1]."</td>";
					echo "<td >".$row[2]."</td>";
 					echo "<td >".$row[3]."</td>";
					echo "<td >".$row[4]."</td>";
					echo "<td>
						<a  href='AdminShowEditTau.php?id=".$row[0]."'>Sửa</a>
					 </td>";
					 echo  "<td> <input type='checkbox' name='del[]' value='".$row[0]."'></td>";
					echo "</tr>";
				}

			?>
			<p id="addBT"><a href="AdminShowAddTau.php">Thêm mới</a></p>
		</table>	
		<span style="margin: 730px; padding-top: 15px"><input type="submit" name="buttonDel" value="delete" onclick=" return confirm('Chắc chắn muốn xóa?')"></span>
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
		    xmlhttp.open("GET", "AdminSearchTau.php?input=" + input, true);
        	xmlhttp.send();
		}
	</script>

	<?php include_once("../View/Share/View_Footer.php");?>
</body>
</html>
