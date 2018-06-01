<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../View/css/Layout.css">
	<script type="text/javascript" src="../View/Js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../View/Js/jquery.validate.min.js"></script>
</head>
<body>
	<?php include_once("Share/View_Header.php");?>
	<?php include_once("Share/View_Menu.php");?>
	<div style="margin-left: 230px;font-size: 16px">

    <div style="color:red ;font-size:30px">
        <?php
            if($tin!=null){
                echo "Mật khẩu hoặc tài khản sai!";
            }
        ?>
    </div>

	<form action="Controller_XuLyDangNhap.php" id="frmLogin" method="post"> 
		<label id="title">Tài khoản:</label><input type="text"  name="taiKhoan"><br>
		<label id="title">	Mật khẩu:</label><input type="password" name="matKhau"><br>
		<input style="margin-left: 120px;padding: 8px;" type="submit" value="Đăng nhập">
	</form>
</div>
	<?php include_once("Share/View_Footer.php");?>

<script type="text/javascript">
        $('#frmLogin').validate({
            ignore: [],
            debug: false,
            rules: {
                "taiKhoan": {
                    required: true,
                    rangelength: [1,32],
                },
                "matKhau": {
                    required: true,
                    rangelength: [1, 32],
                },
               
            },
            messages: {
                "taiKhoan": {
                    required: "<span style='color:red'>Vui lòng nhập Tên đăng nhập</span>",
                    rangelength: "<span style='color:red'>Nhập không đúng số ký tự yêu cầu</span>",
                },
                 "matKhau": {
                     required: "<span style='color:red'>Vui lòng mật khẩu</span>",
                     rangelength: "<span style='color:red'>Nhập từ 3 tới 32 ký tự</span>",
                 },
            },
        });
</script>

</body>
</html>
