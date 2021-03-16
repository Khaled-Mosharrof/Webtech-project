<?php
	$title = "Home Page";
	include('header.php');
?>
	<form action="">
		<fieldset>
			<legend style="background: bisque">SUPER SHOP</legend>
			
			
			<table border="5" " width="100%" align="center">
				<tr align="center">
					<td width="100px">
						<img src="../elements/shop.png" width="100px" height="100px">
					</td>
					<td aligh="left">
					<h1>
						<div style="background: beige ;" align="center"> 
							Welcome , <?php echo $_SESSION['current_user']['username']; ?> 
									  <?php echo $_SESSION['current_user']['type']; ?>
						</div>
					</h1>
						
					</td>
					
					<td colspan="0" height="80px" align="centert">
						<div style="background: beige ;" align="right"> 
							<h2><a href="../controller/logout.php"> Logout</a></h2>
						</div>
					</td>
				</tr>
				<tr align="left" height="500px" width="1000px">
					<td>
						<div class="menu">
							<a href="addProduct.php"><h4>Add product</h4></a> 
							
						  </div>
					</td>
					<td colspan="2"></td>
				</tr>
			
				<tr align="center" >
					<td colspan="3" height="50px">
						<?php
							include('footer.php');
						?>
					</td>
				</tr>
			</table>
	</fieldset>
	</form>
