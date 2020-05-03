<?php
$error_1 = '';
$user_file=fopen("user_file.csv","a+");

if(isset($_POST['register'])){
    if(empty($_POST['new_user']) || empty($_POST['new_user_pass']) || empty($_POST['new_user_pass_conf']) || empty($_POST["new_user_name"])){
 $error_1 = "Missing Inputs ";
 }

else{
$user_0 = $_POST["new_user"];   
$user_1 = strtolower($_POST["new_user_name"]);    
$p1 = $_POST["new_user_pass"];
$p2 = $_POST["new_user_pass_conf"];
if(file_exists($user_1.".txt")){
//error msg
    $error_1 = "User exists";
}
else{    
    if(strcmp($p1,$p2) == 0){
	   //create a file names after the admin and pass in it
	   $data = fopen($user_1.".txt","w");
	   fwrite($data,crypto::encrypt($p1,$master_key));
       fclose($data);
        fwrite($user_file,$user_0.",".$user_1."\r\n");
        $error_1 = "User registered succesfully";
	   }
    else{
	   $error_1 = "inputs do not match";
    }
}
fclose($user_file);
}
}
