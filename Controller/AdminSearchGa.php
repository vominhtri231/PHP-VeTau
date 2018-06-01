<?php
	$input=$_GET["input"];
	include_once("../Model/Model_Ga.php");
	$model_Ga=new Model_Ga();
	$listGa=$model_Ga->search($input);
	if(mysqli_num_rows($listGa)==0 ) echo "không có kết quả trùng";
	else
	{
?>

		<table id="sv">
			<thead>
			<tr>
				<th>Mã ga</th>
				<th>Tên ga</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			</thead>
				
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
		</table>
		<span style="margin: 710px; padding-top: 30px"><input type="submit" name="buttonDel" value="delete" onclick=" return confirm('Chắc chắn muốn xóa?')"></span>
<?php
	}
?>
	



