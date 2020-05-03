<?php
include("config.php");include("check.php"); 
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){

 if(empty($_POST['user']) ||empty($_POST['pass'])){
 $error = "Inputs Missing";
 }
 else
 {
 //Define $user and $pass
 $user=strtolower($_POST['user']);
 $pass=$_POST['pass'];
     
     if(check($user)){header("Location: admin.php");}                                                                                                       if(strcasecmp($user,"root") == 0){     
        
        if(strcasecmp($user,$the_user) == 0 and strcmp($pass,$the_pass) == 0){  
	 
            header("Location: admin.php"); // Redirecting to other page
        }
        else{
            $error = "Inputs are Invalid";
        }
         
     }
     
     else{
        if(file_exists($user.".txt")){
            $myfile = fopen($user.".txt", "r");
            $a = fread($myfile,filesize($user.".txt"));
            $Ass = crypto::decrypt($a,$master_key);
            fclose($myfile);
            if( strcmp($pass,$Ass) == 0){
	        header("Location: attendance.php"); // Redirecting to other page
            }
            else{
            $error = "Inputs are Invalid";
            }
        }
        else{
            $error = "For new user contact Admin";
        }    
        
     } 
 }
}