
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
<div style="margin-left: 200px;font-size: 20px">
	<form action="Controller_XuLyDangKi.php" id="frmLogin" method="post">
		<input type="hidden" name="maTau" value= <?php echo $maTau ;?> >
        <label id="title">Ga đến :</label><input type="text" readonly value=<?php echo $tau[1]?>> <br>
        <label id="title">Ga đi :</label><input type="text" readonly value=<?php echo $tau[2]?>> <br>
        <label id="title">Ngày đi :</label><input type="text" readonly value=<?php echo $tau[3]?>> <br>
        <label id="title">Số vé còn :</label><input type="text" readonly value=<?php echo $tau[4]?>> <br>
	  	<label id="title">Tên :</label><input type="text" name="ten"> <br>
		<label id="title">Số điện thoại :</label><input type="text" name="soDienThoai"><br>
		<label id="title">Email :</label><input type="text" name="email"><br>
		<label id="title">Số chứng minh: </label><input type="text" name="cmnd"><br>
		<input style="margin-left: 150px;padding: 8px;" type="submit" value="Đăng kí">
	</form>
</div>
	<?php include_once("Share/View_Footer.php");?>
</body>
<script type="text/javascript">
        $('#frmLogin').validate({
            ignore: [],
            debug: false,
            rules: {
                "ten": {
                    required: true,
                },
                "soDienThoai": {
                    required: true,
                    number: true,
                },
                "email": {
                    required: true,
                    email: true,
                },
                "cmnd": {
                    required: true,
                    number: true,
                },
            },
            messages: {
                "ten": {
                    required: "<span style='color:red'>Vui lòng nhập tên</span>",
                },
                 "soDienThoai": {
                     required: "<span style='color:red'>Vui lòng nhập số điện thoại</span>",
                     number: "<span style='color: red' >Nhập số điện thoại </span>",
                     rangelength: "<span style='color:red'>Nhập không đúng số ký tự </span>",
                 },
                 "email": {
                     required: "<span style='color:red'>Vui lòng nhập email</span>",
                     email: "<span style='color: red' >Nhập số đúng định dạng email </span>",
                 },
                 "cmnd": {
                     required: "<span style='color:red'>Vui lòng nhập CMND</span>",
                     number: "<span style='color: red' >Nhập số số </span>",
                     rangelength: "<span style='color:red'>Nhập không đúng số ký tự </span>",
                 },
            },
        });
</script>
</html>
