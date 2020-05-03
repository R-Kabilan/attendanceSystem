<?php include("csv_func.php");
        
	if($_POST) {      
?>
<!DOCTYPE>
<html>
<head>
<title > Attendance</title>
     <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/attendance.png">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="application/javascript" >
   
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    
</script>

 </head>    
<body style="background-color: azure">    
 <div class="header-outer" style="background-color: azure;margin-bottom:0px">   
<div class="header">
<div class="header-left">
<div class="header-left-logo"><a href="http://www.nielit.gov.in/"><img alt="NIELIT Logo" src="images/ni.png" style="width:100%"></a></div>
<div class="header-left-text">
<p class="hindi">राष्ट्रीय इलेक्ट्रॉनिकी एवं सूचना प्रौद्योगिकी संस्थान 
<span style="margin-left:-7px;">,</span><span style="margin-left:3px;">औरंगाबाद</span> </p>
<p>National Institute of Electronics &amp; Information Technology<span style="margin-left:0px;">,</span><span style="margin-left:5px;">Aurangabad</span></p>
</div>
<div class="clear"></div>
</div>
<div class="header-right">
<div class="emblem" style="margin-bottom:5px;">
<div id="english">

<div id="headerrighttext">Ministry of Electronics &amp; Information Technology</div>
<div id="headerrighttext1">Government of India</div>
</div>
<div id="rightlogo"><img alt="Emblem of india" src="images/Emblem.png"></div>

<div class="clear"></div>

    </div></div></div></div>


<?php
$present = 0;
$dir = $_POST["yes_sir"];
$size = $_POST["size"];    
$sub = $_POST["subject"];
$daily_dir = $_POST["daily"];
$daily_dir = $daily_dir."/".$sub.".csv";        
if(strcmp($sub,"0") == 0){ 
?>
<h1 style="color:red;font-size:100px;text-align:center"><?php echo "Please select subject:RK AKV"; ?></h1>
<?php
                        
}
    
if(strcmp($sub,"0") !== 0){
   
    $file=fopen($dir,"a+");
    $file_daily=fopen($daily_dir,"w+");
    fwrite($file, date("m/d/y").",".$sub);
    fwrite($file_daily, date("m/d/y").",".$sub);
    for($i=0;$i<$size;$i++){
        $I = (string) $i;
        $I = "$i";
        if(isset($_POST["id".$I])){
            fwrite($file,",P");
            fwrite($file_daily,",P");
            $present++;
        }
        else{
            fwrite($file,",A");
            fwrite($file_daily,",A");
        }
    }
fwrite($file,"\r\n");
fclose($file);
fwrite($file_daily,"\r\n");
fclose($file_daily);    
}

?>
    <div class="bannnr" style="padding-top:50px"><div style="width:100%"><h1 class="small">Subject:<?php echo $sub; ?>  </h1><br />
        <h2 class="small"style="color:yellow">total no of students present today :<?php echo $present; ?> </h2></div><br /> <a href="record.php"><div id="preeti" style="background-color:#0e033c;color:white;opacity:1;text-align:center;width:55%;height:60px;padding-top:15px;font-size:18px;margin-left:25%;margin-right:25%;">View Record</div> </a>
        <div style="width:100%;height:20px;text-align:center;margin-top:15px;padding-left:10px"><a href="index.php?logout=1"><img src="images/logout_2.png"style="width:25px;height:18px"><span style="color:white;font-size:20px;margin-left:3px">Click here to Logout</span></a></div>
    </div></body></html> <?php } 
else {header("Location: index.php?logout=1");}
?>       