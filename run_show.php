<?php include("csv_func.php");
         
	if($_POST) {
    $sem = $_GET["sem"];
    $branch = $_GET["dir"];
    $dir_read = "Database/".$branch."/".$sem;
    $dir_data="temp/".$branch."/".$sem;
    $sub = $_POST["subject"];
    $month = $_POST["month"];
    
    if(strcmp($sub,"0")==0 || strcmp($month,"0")==0){
        header("location:record.php".$dir);}    

?>
<!DOCTYPE>
<html>
<head>
<title > Login</title>
     <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/attendance.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
 <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid azure;
}

th, td {
  text-align: center;
  padding: 15px;
}
 tr:nth-child(even){background-color: #f2f2f2;}
   </style>

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

</div>

<div class="clear"></div>
</div>
     </div></div>
    <br/><br/> <br/>
    <div id="today"style="width:100%;">
         
       <table><tr><th>S.no:</th><th style="text-align:left">NAME</th><th>Roll No.</th> 
        <?php
        $present = csv_read($dir_data);
        $present_size = sizeof($present);   
        $b = csv_read($dir_read);
        $sr = 0;
        $row = sizeof($b);
        $coulmn=0;
        $var= array();
          for($j=0;$j<$present_size;$j++){
              $mon = substr($present[$j][0],0,2);
              $check=array($present[$j][0],$present[$j][1]);
              if(strcmp($mon,$month) == 0 && strcmp($present[$j][1],$sub) == 0 ){
                  $coulmn++;
                  if(array_in_complement($check,$var)){
                  array_push($var,$present[$j]);
                  ?><th><?php echo $present[$j][0]; ?></th><?php
                  }
              }
              
          } ?>
           <th>Total</th>
        </tr> 
        <?php 
        
        
            for($i=0;$i<$row;$i++){
            $no = 0;
            $sr++;    
                ?>
    <tr><td><?php echo $sr; ?><td style="text-align:left"><?php echo $b[$i][0]; ?> </td><td><?php echo $b[$i][1]; ?></td>
    <?php  
        foreach( $var as $asd){
        
        if(strcmp($asd[$i+2],"P")==0){$no++;}
        ?>  
          
    <td><?php echo $asd[$i+2]; ?></td>
           
    <?php
      } ?><td><?php echo $no; ?></td> </tr><?php
            }    
    
    ?>
         
</table></div>
    
    
    </body></html>
<?php } else{
        header("location: index.php");
    } ?>