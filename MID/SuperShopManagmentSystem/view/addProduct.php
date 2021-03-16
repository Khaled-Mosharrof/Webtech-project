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
						
							<legend align="center"><h1><u>Add new product</u></h1></legend>
							<table align="center">
								<tr>
									<td><span>Product name</span> </td>
									<td><input type="text" name="productname" value="" placeholder="Product name"></td>
									
								</tr>
								<tr>
									<td><span>Entry date</span> </td>
									<td><input type="date" name="entrydate" value="" placeholder="Entry date"></td>
								</tr>
								
								<tr>
									<td>Expire date</td>
									<td> <input type="date" name="expdate" value="" placeholder="Expire date"> </td>
								</tr>
								
								<tr>
									<td>Price</td>
									<td><input type="text" name="price" value="" placeholder="Price"></td>
								</tr>
								
									
								<tr>
									<td>___________</td>
									<td>______________________</td>
								
								</tr>
								<tr>
									<td></td>
									<td>
										<input type="submit" name="create" value="Create"> 
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