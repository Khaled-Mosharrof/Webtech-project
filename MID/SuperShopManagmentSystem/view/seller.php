<?php
	$title = "Home Page";
	include('header.php');
?>
	<form action="" method="">
		<fieldset>
			<legend style="background: bisque">SUPER SHOP</legend>

			
			<table border="5" " width="100%" align="center">
				<tr align="center">
					<td width="100px">
						<img src="../elements/shop.png" width="100px" height="100px">
					</td>
					
					<td colspan="0" height="80px" align="right">
						<div style="background: beige ;" align="right"> 
							<h2>User : <a href="adminProfile.php"><?php echo $_SESSION['current_user']['username']; ?>|</a> 
							<a href="sellerDashboard.php"> Dashboard </a> 
						</div>
					</td>
				</tr>
				<tr align="left" height="500px" width="1000px">
					<td>
						<div class="menu">
                        <a href="allProduct.php"><h4>All Products</h4></a>
							<a href="#"><h4>Cooking Essentials</h4></a> 
							<a href="#"><h4>Fruits & Vegetables</h4></a> 
							<a href="#"><h4>Meat & Fish</h4></a> 
							<a href="#"><h4>Chocolates & Candies</h4></a> 
							<a href="#"><h4>Baby Food & Care</h4></a>
							<a href="#"><h4>Milks & Dairy Products</h4></a>
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

