<?php
include("config.php");

$error='';


if(isset($_POST['submit'])){

if(empty($_POST['pass_change']) ||empty($_POST['pass_change_conf']) || empty($_POST['old_pass'])){
 $error = "Missing Inputs ";
 }

else{
    $old_pass = $_POST["old_pass"];
    $new_pass = $_POST["pass_change"];
    $new_conf= $_POST["pass_change_conf"];
    if(strcmp($old_pass,$the_pass) == 0){    
        
        if (strcmp($new_pass,$new_conf) == 0){
           $file = fopen("password.txt","w");
	       fwrite($file,crypto::encrypt($new_pass, $master_key));
           fclose($file);
	       $error = "Password changed";
        }

    else{$error = "Passwords do not match";}

    }
    else{$error = " Incorrect Password";}

}
}