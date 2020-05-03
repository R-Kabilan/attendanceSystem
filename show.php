<?php include("csv_func.php");
         
	
    $sem = $_GET["sem"];
    $sem = $sem.".csv";
    $branch = $_GET["dir"];
    $dir_read = "Database/".$branch."/".$sem;
    $dir_data="temp/".$branch."/".$sem;

?>

<!DOCTYPE>
<html>
<head>
<title > Login</title>
     <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/attendance.png">
    <link rel="stylesheet" type="text/css" href="style1.css">
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
    
   
     <div  id="tab" style="width:auto">
         
         <form style="width:auto" action="run_show.php?sem=<?php echo $sem; ?>&dir=<?php echo $branch; ?>" method="POST" >
             <div style="width:100%">
                  
        
                 <div class="banner" style="padding-top:30px;padding-left:3%;padding-right:3%;height:200px">
    <div class="bun-type" style="width:100%;;outline:none;margin-bottom:8%" >
				<div class="resize"style="width:100%">
          <select id="preeti" name="month" style="width:100%; height:30px;cursor:pointer;outline:none;font-size:16px;outline:none" > 
            <option value="0">Select Month</option>
            <option value="01"> January</option>
            <option value="02">February</option>
          <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
               <option value="08">August</option>
               <option value="09">September</option>
               <option value="10">October</option>
               <option value="11">November</option>
              <option value="12">December</option>
                    </select> </div>	</div>
        
         <div class="bun-type" style="width:100%;outline:none;margin-bottom:8%" >
        <div style="width:100%">
          <select id="preeti" name="subject" style="width:100%; height:30px;cursor:pointer;outline:none;font-size:16px;outline:none" > 
            <option value="0">Select Subject</option>
             <?php
        $c = array();
        $c = csv_read("Subjects/".$branch."/".$sem);    
        $row = sizeof($c);
        
         
            for($i=0;$i<$row;$i++){
                ?>
            
            <option value="<?php echo $c[$i][0]; ?>"> <?php echo $c[$i][0]; ?> </option>
              <?php } ?>
            </select> </div>	</div>
        
        
         <div class="bun-type" style="width:100%;outline:none" >
                <div style="float:left;width:`100%; border-width: 5px;
                      border-color: black;color:white;font-size:16px;cursor:pointer;margin-left:0px">
        
         <input type="submit" value="Submit" id="pre" name="search" style="font-weight: bold;width:80%;height:30px;outline:none;font-size:14px;text-align:center;padding:6px;margin-left:50px">
        
        
                    
             </div></div>
            <button type="submit"  formaction="create.php?sem=<?php echo $sem; ?>&dir=<?php echo $branch; ?>" style="font-weight: bold;height:30px;outline:none;font-size:14px;text-align:right">Download</button></div></div>
          
          
       
       <br />
             <script type="application/javascript">
var n = new Date();
var y = n.getFullYear();
var m = n.getMonth() + 1;
var d = n.getDate();
document.getElementById("demo").innerHTML = "Date: "+ d + "/" + m + "/" + y; 
</script>
            
             
            
             
             
             
         </form></div>
    <script type="application/javascript">
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
    
    
    </script>
    
    
    
    
     </body></html>
