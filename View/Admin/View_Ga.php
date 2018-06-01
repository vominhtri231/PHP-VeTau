
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

	<form method="post" action="AdminGaController.php">
	<div id="tableGa">
		<table id="sv">
			<thead>
			<tr>
				<th>Mã ga</th>
				<th>Tên ga</th>
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
					echo "<td>
						<a  href='AdminShowEditGa.php?id=".$row[2]."'>Sửa</a>
					 </td>";
					 echo  "<td> <input type='checkbox' name='del[]' value='".$row[2]."'></td>";
					echo "</tr>";
				}

			?>
			<p id="addBT"><a href="AdminShowAddGa.php">Thêm mới</a></p>
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
		    xmlhttp.open("GET", "AdminSearchGa.php?input=" + input, true);
        	xmlhttp.send();
		}
	</script>

	<?php include_once("../View/Share/View_Footer.php");?>
</body>
</html>
