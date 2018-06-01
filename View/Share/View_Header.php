


<div id="contain">
		<div class="header" id="contain-header">
			<img src="../View/Images/train.png"  id="headerIma"/>
			<div id="account">
				<?php	
					$username=isset($_SESSION["userLogin"])?$_SESSION["userLogin"]:null;
					if($username!=null) {
				?>
				<span id="wellcome">
					Chào <?php echo $username ?> !!!
				</span>
				<a href="Controller_DangXuat.php">Đăng xuất</a>
				<?php }else{ ?>
					<a href="Controller_DangNhap.php">Đăng nhập</a>
				<?php } ?>
			</div>
		</div>
		
		<div id="main">