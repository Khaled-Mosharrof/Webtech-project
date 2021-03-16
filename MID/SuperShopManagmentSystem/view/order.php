<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="post" action="../controller/addProductCheck.php" enctype="multipart/form-data">
		


		<fieldset>
			<legend style="background: bisque">SUPER SHOP</legend>
			
			<table  width="100%" align="center">
				<tr align="center">
					<td width="100px">
						<img src="../elements/shop.png" width="100px" height="100px">
					</td>
					<td colspan="2" height="80px" align="right">		
					</td>
				</tr>
				<tr align="left" height="300px">
					<td colspan="3">
						
							<legend align="center"><h1><u>Order product</u></h1></legend>
							<table align="center">
								<tr>
									<td><span>Product name</span> </td>
									<td><input type="text" name="productname" value="" placeholder="Product name"></td>
									
								</tr>
								<tr>
									<td><span>Add to cart</span> </td>
									<td><input type="text" name="addtocart" value="" placeholder="Add to cart"></td>
								</tr>
								
								<tr>
									<td>Address</td>
									<td> <textarea name="address"></textarea> </td>
								</tr>
								
								<tr>
									<td>Phone no</td>
									<td><input type="text" name="phone" value="" placeholder="Phone"></td>
								</tr>
								
									
									<tr>
									<td>Payment</td>
									<td><input type="radio" name="payment" value="" >Cash</td>
									<td><input type="radio" name="payment" value="" >Card</td>
									<td><input type="radio" name="payment" value="" >Mobile Banking</td>
								</tr>
								
								<tr>
									<td>___________</td>
									<td>______________________</td>
								
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" name="order" value="Order"> 
									</td>
								
								</tr>
							</table>
						
					</td>
				</tr>
			
				<tr align="center" >
					<td colspan="3" height="50px">
						Copyright@2021
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>