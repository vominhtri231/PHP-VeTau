<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../View/css/Layout.css">
	<script type="text/javascript" src="../View/Js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../View/Js/jquery.validate.min.js"></script>
</head>
<body>
	<?php include_once("../View/Share/View_Header.php");?>
	<?php include_once("../View/Share/View_Menu.php");?>

		<form action="AdminEditTau.php" method="post" id="frmLogin">
			<input class="a1" type="hidden" value="<?php echo $arruser[0]?>" id="maTau" name="maTau" placeholder="Mã tàu"/>
			<span style="margin-left: 20px"> Số lượng </span><input class="a1" type="text" value="<?php echo $arruser[4]?>" id="soLuong" name="soLuong" placeholder="Số lượng"/>
			<br>
		 	<label><span style="margin-left: 20px"> Ga đi </span></label> 
		 	<select name="gaDi">
				<?php 
					while($ga=mysqli_fetch_array($listGa)){
					if($arruser[1]== $ga[0])
						echo '<option selected="selected" value='.$ga[0].'>'.$ga[1].'</option>';
					else
						echo '<option  value='.$ga[0].'>'.$ga[1].'</option>';
				}
				?>
			</select> 
		<?php mysqli_data_seek( $listGa, 0 );?>
			<label><span style="margin-left: 20px">Ga đến</span> </label> 
			<select name="gaDen">
				<?php 
					while($ga=mysqli_fetch_array($listGa)){
						if($arruser[2]== $ga[0])
						echo '<option selected="selected" value='.$ga[0].'>'.$ga[1].'</option>';
					else
						echo '<option  value='.$ga[0].'>'.$ga[1].'</option>';
				}
				?>
			</select> 
		 	<span style="margin-left: 20px"> Ngày đi:</span><input class="a1" type="date" value="<?php echo $arruser[3]?>" id="ngay" name="ngay" placeholder=""/>
			<br><input class="a2" type="submit" value="Sửa" id="add" name="submit"/>
		</form>

	<?php include_once("../View/Share/View_Footer.php");?>
<script type="text/javascript">
        $('#frmLogin').validate({
            ignore: [],
            debug: false,
            rules: {
                "maTau": {
                    required: true,
                },
                "soLuong": {
                    required: true,
                    number: true,
                },
               "ngay": {
                    required: true,
                },
            },
            messages: {
                "maTau": {
                    required: "<span style='color:red'>Vui lòng nhập mã tàu</span>",
                },
                 "soLuong": {
                     required: "<span style='color:red'>Vui lòng nhập số lượng vé</span>",
                     number: "<span style='color: red' >Nhập số </span>",
                 },
                 "ngay": {
                    required: "<span style='color:red'>Vui lòng chọn ngày đi</span>",
                },
            },
        });
</script>
</body>
</html>