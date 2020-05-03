<?php
function check_serv(){
    $serv_host=$_SERVER['HTTP_HOST'];
    $serv_0 = "http://".$serv_host;
    $serv_1 = "https://".$serv_host;
    $len=strlen($serv_host)+7;
    $ref_0 = substr($_SERVER['HTTP_REFERER'],0,$len);
    $ref_1 = substr($_SERVER['HTTP_REFERER'],0,$len+1);
    if(strcmp($ref_0,$serv_0) == 0 || strcmp($ref_1,$serv_1) == 0){
        return 1;
    }
    else{
        return 0;
    }
}
