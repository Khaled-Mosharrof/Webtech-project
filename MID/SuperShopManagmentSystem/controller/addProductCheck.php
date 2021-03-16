<?php 
    if(isset($_POST['create'])){
        if(empty($_POST['productname']) || empty($_POST['entrydate']) || empty($_POST['expdate']) || empty($_POST['price']) ){
            echo"Plaese fill out all the field";
        }
        else{
            //validation check

            $temp_price=explode('-', $_POST['price']);

           
            if ($temp_price[0]>1000000000) {
                echo"Are you that reach, really?";
            }
            else{

                $productname= $_POST['productname'];
                $entrydate=$_POST['entrydate'];
                $expdate=$_POST['expdate'];
                $price= $_POST['price'];
                
              

                $user=['productname'=> $productname,  'entrydate'=> $entrydate, 'price' => $price,  'expdate' => $expdate ];
				

                if ($entrydate!=$expdate) {
                    if(filesize('../model/product.json')==0){
                        $json=json_encode($user);
                        $myfile=fopen('../model/product.json', 'w');
                        fwrite($myfile, '['.$json.']');
                    }
                    else{
                        $inp = file_get_contents('../model/product.json');
                        $tempArray = json_decode($inp);
						//$tempJSONdata[] = $formdata;
                        array_push($tempArray, $user);
                        $jsonData = json_encode($tempArray);
                        file_put_contents('../model/product.json', $jsonData);
                    }
                    header('location: ../view/allProduct.php');
                   
                }
                else{
                    echo"please check your entrydate and confirm entrydate";
                }

            }

            
        }
    }

?>