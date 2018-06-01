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

		<form action="AdminAddTau.php" method="post" id="frmLogin">
			<input class="a1" type="text" value="" id="maTau" name="maTau" placeholder="Mã tàu"/>
			<input class="a1" type="text" value="" id="soLuong" name="soLuong" placeholder="Số lượng"/>
			<br>
		 	<label><span style="margin-left: 20px"> Ga đi </span></label> 
		 	<select name="gaDi">
				<?php 
					while($ga=mysqli_fetch_array($listGa)){
						echo '<option value='.$ga[0].'>'.$ga[1].'</option>';
				}
				?>
			</select> 
		<?php mysqli_data_seek( $listGa, 0 );?>
			<label><span style="margin-left: 20px">Ga đến</span> </label> 
			<select name="gaDen">
				<?php 
					while($ga=mysqli_fetch_array($listGa)){
						echo '<option value='.$ga[0].'>'.$ga[1].'</option>';
				}
				?>
			</select> 
		 	<span style="margin-left: 20px"> Ngày đi:</span><input class="a1" type="date" value="" id="ngay" name="ngay" placeholder=""/>
			<br><input class="a2" type="submit" value="Thêm" id="add" name="submit"/>
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