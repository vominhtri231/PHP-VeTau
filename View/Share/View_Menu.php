
    
<div id="menu">
		<div class="header" id="menu-header"> Menu </div>
		<ul>	
		<?php
			if(isset($_SESSION["userLogin"])){
				
				echo "<li><a class='menuItem' href='AdminGaController.php'>Các ga</a></li>";
				echo "<li><a class='menuItem' href='AdminTauController.php'>Các tàu</a></li>";
				echo "<li><a class='menuItem' href='AdminVeController.php'>Vé đã bán</a></li>";
			}
			else{
				echo "<li><a class='menuItem' href='Controller_TrangChu.php'> Trang chủ</a></li>";
				echo "<li><a class='menuItem' href='Controller_TimTau.php'> Tìm tàu</a></li>";
			}	
					
		?>			
		</ul>
</div>
