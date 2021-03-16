<?php 
    if(isset($_POST['signup'])){
        if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['repass']) || empty($_POST['dob']) || empty($_POST['gender']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['type'])){
            echo"Plaese fill out all the field";
        }
        else{
            //validation check

            $temp_dob=explode('-', $_POST['dob']);

            $target_file = basename($_FILES["profilePicture"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                echo "only jpeg, jpg & png files are allowed.";
            }
            if ($temp_dob[0]>2015) {
                echo"Please select year before 2015.";
            }
            else{

                $username= $_POST['username'];
                $password=$_POST['password'];
                $repass=$_POST['repass'];
                $dob= $_POST['dob'];
                $gender = $_POST['gender'];
                $email=$_POST['email'];
                $phone = $_POST['phone'];
                $address=$_POST['address'];
                $type=$_POST['type'];
                move_uploaded_file($_FILES['profilePicture']['tmp_name'], '../upload/'.$_FILES['profilePicture']['name']);
                $profilePicture='../upload/'.$_FILES['profilePicture']['name'];

                $user=['username'=> $username, 'profilePicture'=> $profilePicture, 'password'=> $password, 'dob' => $dob, 'gender' => $gender, 'email'=>$email, 'phone' => $phone, 'address' => $address, 'type' => $type ];
				$formdata = array(
					'username'=> $_POST["username"],
					'profilePicture'=> $_POST['profilePicture'],
					'password'=> $_POST["password"],
					'dob' => $_POST['dob'],
					'gender' => $_POST['gender'],
					'email'=> $_POST["email"],
					'phone' => $_POST['phone'],
					'address' => $_POST['address'],
					'type' => $_POST['type']
					
				 );

                if ($password!=$repass) {
                    echo"please check your password and confirm password";
                }
                else{
                    if(filesize('../model/admin.json')==0){
                        $json=json_encode($user);
                        $myfile=fopen('../model/admin.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../model/admin.json');
                        $tempArray = json_decode($inp);
						//$tempJSONdata[] = $formdata;
                        array_push($tempArray, $user);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../model/admin.json', $jsonData);
                    }
                    header('location: ../view/login.html');
                }

            }

            
        }
    }

?>