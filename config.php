<?php
include("encrypt.php");
$master_key = "password";
$the_user="root";
$myfile = fopen("password.txt", "r");
$alla=fread($myfile,filesize("password.txt"));
$the_pass = crypto::decrypt($alla, $master_key);
fclose($myfile);