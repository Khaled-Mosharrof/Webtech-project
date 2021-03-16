<?php
	$title = "Home Page";
	include('header.php');

    $username=$_SESSION['nam'];

    $temp = json_decode(file_get_contents('../model/admin.json'), true);
	//$temp = json_decode($inp, true);

    foreach ($temp as $key1 => $value1) {
        if ($temp[$key1]["name"]==$name) {
            $namep=$temp[$key1]["username"];
            $type=$temp[$key1]["type"];
            $email=$temp[$key1]["email"];
            $phone=$temp[$key1]["phone"];
            $dob=$temp[$key1]["dob"];
            $profilePicture=$temp[$key1]["profilePicture"];
            $address=$temp[$key1]["address"];
            $gender=$temp[$key1]["gender"];
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $namep ?></title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td width="400px" align="center"><h3><b>Welcome <a href="adminProfile.php"><?php echo $_SESSION['current_user']['username']; ?></a></b></h3> </td>
        </tr>
        <tr height=600px>
            <td style="font-size: large;">
               
            </td>
            <td colspan="2" align="center">
                <table border="0" width="80%">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $namep ?></td>
                        <td rowspan=8 align="center">
                            <img src=<?php echo $profilePicture ?> height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Type </td>
                        <td>: <?php echo $type ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>: <?php echo $gender ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $phone ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $address ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>: <?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <?php
					include('footer.php');
				?>
					
            </td>
        </tr>
    </table>
</body>
</html>

