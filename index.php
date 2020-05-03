<?php
include("loginserv_1.php");

$logout="0";
if($_GET){
$logout = $_GET["logout"];

}
?>

<!DOCTYPE>
<html>
<head>
<title > Login</title>
     <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <link rel="icon" type="image/png" href="images/attendance.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    if(strcmp($logout,"1")==0){  ?>
    <script type="application/javascript" >
   
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    
</script>
    <?php 
    }
    ?>
    </head>

<body style="background-color: azure">    
 <div class="header-outer" style="background-color: azure">   
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

<div class="clear"></div>
</div>
    
    </div>
  <div class="row">
    <div class="bgimage" style="background-image: url(images/at.png);background-position: left;background-repeat: no-repeat;margin-top: 10px;margin-right: 0px;background-size: 70%"></div>
    
    <div class="banner" style="height:330px">
      <form action="" method="post">  
        <h1 style="margin-top: 30px;text-shadow: 5px 0px #000000">Login</h1>
            
             <input type="text" id="user" autocomplete="off" name="user" style="border-radius: 5px;text-align: center;margin-top:15px;background-image: url(images/ui.png);background-size: 18px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;text-overflow:clip;padding-left: 20px;display: inline-block;text-align:left;outline: none"><br />
         
          <br />
   
        <input type="password" id="pass" name="pass" style="border-radius: 5px;text-align: center;background-image: url(images/pass.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none">

    <br /><br />    <input type="submit" value="Login" id="preeti" name="submit" style="font-weight: bold;outline: none;box-shadow: 0px 3px 0px black;transition-duration: 0.5s;border-width: 0px"><br /><br />
    <a href="record.php"><span id="mau" style="color:white;text-align:center;font-size:20px">Click here to view record</span></a><br />
    <span style="color:yellow;font-weight:3px" ><?php echo $error ?></span>
        </form>
    </div>
    
    </div>
    <script type="application/javascript">
        
        document.getElementById("preeti").onclick = function() {
            
            document.getElementById("preeti").style.boxShadow = "0px 0px"
            
        }
    
      document.getElementById("preeti").onmouseover = function(){document.getElementById("preeti").style.backgroundColor = "black";
                                                                document.getElementById("preeti").style.color = "white";
                                                                document.getElementById("preeti").style.boxShadow = "1px 2px 0px 0px #b5afaf";
                                                                 document.getElementById("preeti").style.cursor = "pointer"}
    document.getElementById("preeti").onmouseout = function(){document.getElementById("preeti").style.backgroundColor = "white";
                                                             document.getElementById("preeti").style.color = "black";
                                                             document.getElementById("preeti").style.boxShadow = "0px 3px 0px 0px black";}
    
    document.getElementById("mau").onmouseover = function(){
        
        document.getElementById("mau").style.color = "aqua";
        document.getElementById("mau").style.fontSize = "24px";
        
    }
     document.getElementById("mau").onmouseout = function(){
        
        document.getElementById("mau").style.color = "white";
        document.getElementById("mau").style.fontSize = "20px";
        
    }
    
    
    
    </script>
    
    
    
    
    
    
        </body>

</html>