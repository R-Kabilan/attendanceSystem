<?php

include("csv_func.php");
$error_2 = '';
$user_file=array();
$user_file = csv_read("user_file.csv");
if(isset($_POST['delete'])){
    if(empty($_POST['user_rm']) || empty($_POST['root_pass'])){
 $error_2 = "Missing Inputs ";
    }
    else{
        $s = strtolower($_POST["user_rm"]);
        $root_pass = $_POST["root_pass"];
        if(strcmp($root_pass,$the_pass)==0){
            csv_rm_row("user_file.csv",$user_file,$s);
            if (file_exists($s.".txt")){
                $a =  unlink($s.".txt");
                while(!$a){
                    $a =  unlink($s.".txt");
                }
                
                $error_2 = "User removed";
            }
            else{$error_2 = "User not found";}
        }
        else{$error_2 = "Password incorrect";}
    }
}

