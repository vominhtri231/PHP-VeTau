<?php
	$input=$_GET["input"];
	include_once("../Model/Model_Tau.php");
	$model_Tau=new Model_Tau();
	$listGa=$model_Tau->search($input);
	if(mysqli_num_rows($listGa)==0 ) echo "không có kết quả trùng";
	else
	{
?>
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
		</table>
		<span style="margin: 730px; padding-top: 15px"><input type="submit" name="buttonDel" value="delete" onclick=" return confirm('Chắc chắn muốn xóa?')"></span>
<?php
	}
?>
	



