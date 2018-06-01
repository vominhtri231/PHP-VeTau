<?php
	$input=$_GET["input"];
	include_once("../Model/Model_DangKiVe.php");
	$model_DangKiVe= new Model_DangKiVe();
	$listDangKi=$model_DangKiVe->search($input);
	if(mysqli_num_rows($listDangKi)==0 ) echo "không có kết quả trùng";
	else
	{
?>

		<table id="sv">
			<thead>
			<tr>
				<th>Mã đăng kí</th>
				<th>Mã tàu</th>
				<th>Tên</th>
				<th>SDT</th>
				<th>email</th>
				<th>CMND</th>
				<th>Xóa</th>
			</tr>
			</thead>
			
			<?php
				while($row=mysqli_fetch_array($listDangKi)){
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
		<span style="margin: 730px; padding-top: 15px"><input type="submit" name="buttonDel" value="delete" onclick=" return confirm('Chắc chắn muốn xóa?')"></span>
<?php
	}
?>
	



