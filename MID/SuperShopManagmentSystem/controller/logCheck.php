<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$type     = $_POST['type'];
		
		$user = ['username'=> $username, 'password'=> $password, 'type' => $type];
		$formdata = array(
			'username'=> $_POST["username"],
			'password'=> $_POST["password"],
			'type' => $_POST['type']
			
		 );

		$userFile = fopen("../model/admin.json", "r");
		$userData = fread($userFile, filesize('../model/admin.json'));
		//$data = file_get_contents('../model/data.json');
		$existingdata[]= json_decode($userData, true);
      
		if($username == "" || $password == "" || $type == ""){
			echo "null input...";
		}else{

			foreach ($existingdata as $key => $value) {
				foreach ($value as $k => $v) {	
			 
			if($v['username'] == $_POST['username'] && $v['password'] == $_POST['password'] && $v['type'] == $_POST['type'] ){
				$_SESSION['flag'] = true;
				//print_r($value['username']);
				
				if($type== 'addmin')
				{				
					$_SESSION['current_user'] =$formdata;
					header('location: ../view/admin.php');
				}elseif($type== 'seller'){
					$_SESSION['current_user'] =$formdata;
					header('location: ../view/seller.php');

				}elseif($type== 'customer'){
					$_SESSION['current_user'] =$formdata;
					header('location: ../view/customer.php');
				}
				elseif($type== 'accountent'){
					$_SESSION['current_user'] =$formdata;
					header('location: ../view/accountent.php');
				}
			}else{
				echo "invalid user". "<br>";
				
			}
		  }
		 }	

		}
	}


?>