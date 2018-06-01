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

		<form action="AdminEditGa.php?id=" method="post" id="frmLogin">
			<input class="a1" type="hidden" value="<?php echo $arruser[2]?>" id="id" name="id" />
			<input class="a1" type="text" value="<?php echo $arruser[0]?>" id="maGa" name="maGa" placeholder="Mã ga"/>
		 	<input class="a1" type="text" value="<?php echo $arruser[1]?>" id="name" name="name" placeholder="Tên ga"/>
			<br><input class="a2" type="submit" value="Sửa" id="add" name="submit"/>
		</form>

	<?php include_once("../View/Share/View_Footer.php");?>
</body>
<script type="text/javascript">
        $('#frmLogin').validate({
            ignore: [],
            debug: false,
            rules: {
                "maGa": {
                    required: true,
                },
                "name": {
                    required: true,
                },
            },
            messages: {
                "maGa": {
                    required: "<span style='color:red'>Vui lòng nhập mã ga</span>",
                },
                 "name": {
                     required: "<span style='color:red'>Vui lòng nhập tên ga</span>",
                 },
            },
        });
</script>
</html>