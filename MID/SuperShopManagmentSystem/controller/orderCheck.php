<?php 
    if(isset($_POST['order'])){
	if(empty($_POST['productname']) || empty($_POST['addtocart']) || empty($_POST['address']) || empty($_POST['phoneno']) || empty($_POST['payment'])){
            echo"Plaese fill out all the field";
        }
        else{
            //validation check

           // $temp_phoneno=explode('-', $_POST['phoneno']);

           
            if ($temp_phoneno[0]>10000000000000) {
                echo"Are you that reach, really?";
            }
            else{

                $productname= $_POST['productname'];
                $entrydate=$_POST['entrydate'];
                $address=$_POST['address'];
                $phoneno= $_POST['phoneno'];
				$phoneno= $_POST['payment'];
                
              

                $user=['productname'=> $productname,  'entrydate'=> $entrydate, 'phoneno' => $phoneno,  'address' => $address, 'payment' => $payment,];
				

                if ($addtocart!=$0) {
                    if(filesize('../model/order.json')==0){
                        $json=json_encode($user);
                        $myfile=fopen('../model/order.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../model/order.json');
                        $tempArray = json_decode($inp);
						//$tempJSONdata[] = $formdata;
                        array_push($tempArray, $user);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../model/order.json', $jsonData);
                    }
                    header('location: ../view/order.php');
                   
                }
                else{
                    echo"please check your entrydate and confirm entrydate";
                }

            }

            
        }
    }

?>