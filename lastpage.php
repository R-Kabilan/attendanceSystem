<?php include("csv_func.php");
      
	include("check_serv.php");
    if(check_serv()) {
        
    $sem_raw = $_GET["sem_raw"];
    $sem = $_GET["sem"];
    $branch = $_GET["dir"];
    $daily_dir = "daily/".$branch."/".$sem;
    $sem = $sem.".csv";    
    $dir_read = "Database/".$branch."/".$sem;
    $dir_write = "temp/".$branch."/".$sem;
        
    
?>

<!DOCTYPE>
<html>
<head>
<title > Attendance</title>
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
    <br/><br/> 
    <div style="width:100%;margin:0px">
    
    <form action="take_attendance.php" method="post" style="width:100%;">
       <div style="width:100%">
    <div class="bun-type" style="width:200px;float:left;padding-left:8%;outline:none" >
					
          <select id="preeti" name="subject" style="width:200px; height:30px;cursor:pointer;outline:none;font-size:13px" > 
              <option value="0">Select SUBJECT</option>
              <?php
        $c = array();
        $c = csv_read("Subjects/".$branch."/".$sem);    
        $row = sizeof($c);
        
         
            for($i=0;$i<$row;$i++){
                ?>
            
            <option value="<?php echo $c[$i][0]; ?>"> <?php echo $c[$i][0]; ?> </option>
              <?php } ?>
            
        </select> 
           </div>
           <div style="float:right">
         <p id="demo" style="float:right; margin-top: 10px;width:160px;margin-bottom:40px;font-weight:bold"></p></div>
          
       
        </div> 
      
   

<script type="application/javascript">
var n = new Date();
var y = n.getFullYear();
var m = n.getMonth() + 1;
var d = n.getDate();
document.getElementById("demo").innerHTML = "Date: "+ d + "/" + m + "/" + y; 
</script>
        <table><tr><th>S.no:</th><th style="text-align:left">NAME</th><th>Roll No.</th><th>Attendance</th> </tr> 
        <?php
        $b = array();
        $b = csv_read($dir_read);    
        $row = sizeof($b);
        $a = 0;
         
            for($i=0;$i<$row;$i++){
                $I = (string) $i;
                $I = "$i";
                $a++;
                ?>
    <tr><td><?php echo $a; ?> </td><td style="text-align:left"><?php echo $b[$i][0]; ?> </td><td><?php echo $b[$i][1]; ?></td>
    <td><input type="checkbox" style="width:30px; height:20px" name = "<?php echo "id".$I; ?>" /></td></tr>
<?php
            }  
    
    ?>
         
</table>
    <div>
    
    <br/><br/>  <div style="width:100%;padding-right:10%;height:60px;">
    <input type="hidden" name = "yes_sir" value="<?php echo $dir_write ?>" />
        <input type="hidden" name = "size" value="<?php echo $row ?>" />
        <input type="hidden" name = "daily" value="<?php echo $daily_dir ?>" />
        <input type="hidden" name = "key" value="passme" />
    <input type="submit" value="Submit" id="pre" style="font-weight: bold;width:120px;height:30px;float:right;outline:none;font-size:14px;text-align:center;padding:6px;display:none"></div> 
    
        </div>
    </form>
    </div>
    
     <script type="application/javascript">
         
        document.getElementById("preeti").onclick = function() {document.getElementById("pre").style.display = "block";} 
        document.getElementById("pre").onclick = function() {
        document.getElementById("pre").style.boxShadow = "0px 0px";
            
        }
    
      document.getElementById("pre").onmouseover = function(){document.getElementById("pre").style.backgroundColor = "#aa2a2a";
                                                                document.getElementById("pre").style.color = "white";
                                                                document.getElementById("pre").style.boxShadow = "6px 6px 6px 0px #000000";
                                                                 document.getElementById("pre").style.cursor = "pointer"}
    document.getElementById("pre").onmouseout = function(){document.getElementById("pre").style.backgroundColor = "#761313";
                                                             document.getElementById("pre").style.color = "white";
                                                             document.getElementById("pre").style.boxShadow = "6px 6px 6px 0px #000000";}
    
    
     document.getElementById("pree").onclick = function() {
            
            document.getElementById("pree").style.boxShadow = "0px 0px";
            
        }
    
      document.getElementById("pree").onmouseover = function(){document.getElementById("pree").style.backgroundColor = "#aa2a2a";
                                                                document.getElementById("pree").style.color = "white";
                                                                document.getElementById("pree").style.boxShadow = "6px 6px 6px 0px #000000";
                                                                 document.getElementById("pree").style.cursor = "pointer"}
    document.getElementById("pree").onmouseout = function(){document.getElementById("pree").style.backgroundColor = "#761313";
                                                             document.getElementById("pree").style.color = "white";
                                                             document.getElementById("pree").style.boxShadow = "6px 6px 6px 0px #000000";}
    
    
    
    </script>
    
    
</body></html>
<?php
    }
else {header("Location: index.php");} 
?>