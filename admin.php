<?php 
      include("passchange_serv.php");
      include("register.php");
      include("delete_user.php");
      include("check_serv.php");
	if(check_serv()){
        $ra="";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     
    $ra = $_POST["read_show"];    
}?>
<!DOCTYPE>
<html lang="en" >

<head >
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="images/attendance.png">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<script type="application/javascript" >
   
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    
</script>
    
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
<div class="header-right" id="header-right">
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
  <meta charset="UTF-8">
  <title>Admin</title>
  <div class="nav" style="margin-top:30px">
  <div class="nav-header">
    <div class="nav-title" id="adm">
   <a style="color: white"> Admin</a>
        
    </div>
  </div>
  <div class="nav-btn"  id="label">
    <label>
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
      
 <a href ="index.php?logout=1"><div style="background-image:url(images/logoutt.png);background-size:80%;background-repeat:no-repeat;width:30px;height:30px;float:left;margin-bottom:10px;margin-left:10px;margin-top:12px"></div></a>
  <div class="nav-links" id="nav-links">
      
    <a id="re">Register </a>
    <a target="_blank" id="de">Delete User </a>
    <a target="_blank" id="ch">Change Password </a>
    <a href="attendance.php">Attendance  </a>
    
  </div>
</div>
    
    
    
    
    <div class="row">
   <div class="banner" id="banner" style="z-index:08;opacity:1;margin-top:140px;display:none">
      <form action="" method="post" autocomplete="off">  
        <h1 style="margin-top:30px;text-shadow: 5px 0px #000000">Register</h1>
            
             <input type="text" id="mc" name="new_user" placeholder="Enter Name" autocomplete="off" style="border-radius: 5px;text-align: center;margin-top:15px;background-image: url(images/ui.png);background-size: 18px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;text-overflow:clip;padding-left: 20px;display: inline-block;text-align:left;outline: none"><br /><br />
          <input type="hidden" name="read_show" value="reg">
             <input type="text" id="mc_pass" name="new_user_name" placeholder="Set Username" style="border-radius: 5px;text-align: center;background-image: url(images/ui.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none"><br /><br />
          
             <input type="password" id="mc_pass" name="new_user_pass" placeholder="Set Password" style="border-radius: 5px;text-align: center;background-image: url(images/pass.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none"><br /><br />

             <input type="password" id="mc_pass" name="new_user_pass_conf" placeholder="Confirm Password" style="border-radius: 5px;text-align: center;background-image: url(images/pass.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none"><br /><br />    
             <input type="submit"name = "register" value="Register" id="preeti"   style="width: 100px; font-weight: bold;outline: none;box-shadow: 0px 3px 0px black;transition-duration: 0.5s;border-width: 0px">
            <div style="width:100%;text-align:center;color:yellow;margin-top:20px"><span><?php echo $error_1; ?></span></div>
        
        </form>
        </div></div>
  
     <div class="row">
   <div class="bannerr" id="bannerr" style="z-index:08;opacity:1;margin-top:140px;display:none">
      <form action="" method="post" autocomplete="off">  
        <h1 style="margin-top:30px;text-shadow: 5px 0px #000000">Delete User</h1>
            
            <input type="text" id="mc" name="user_rm" placeholder="Enter UserName" style="border-radius: 5px;text-align: center;margin-top:15px;background-image: url(images/ui.png);background-size: 18px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;text-overflow:clip;padding-left: 20px;display: inline-block;text-align:left;outline: none"><br /><br />
           <input type="hidden" name="read_show" value="del">
            <input type="password" id="mc_pass" name="root_pass" placeholder="Admin Password" style="border-radius: 5px;text-align: center;background-image: url(images/pass.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none"><br /><br />
            
            <input type="submit"  name = "delete" value="Delete" id="preetii" style="width: 100px; font-weight: bold;outline: none;box-shadow: 0px 3px 0px black;transition-duration: 0.5s;border-width: 0px">
            <div style="width:100%;text-align:center;color:yellow;margin-top:20px"><span><?php echo $error_2; ?></span></div>
        </form>
        </div></div>

    
     <div class="row">
   <div class="bannerr" id="bannerrr" style=";opacity:1;z-index:08;margin-top:140px;display:none;height:350px;width:300px">
      <form action="" method="post" autocomplete="off">  
        <h1 style="margin-top:10px;text-shadow: 5px 0px #000000">Change Password</h1>
            
          <input type="password" id="mc" name="old_pass" placeholder="Enter Old Password" style="border-radius: 5px;text-align: center;margin-top:15px;background-image: url(images/ui.png);background-size: 18px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;text-overflow:clip;padding-left: 20px;display: inline-block;text-align:left;outline: none"><br /><br />
            <input type="hidden" name="read_show" value="chg">
          <input type="password" id="mc_pass" name="pass_change" placeholder="Enter New Password" style="border-radius: 5px;text-align: center;background-image: url(images/pass.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none"><br /><br />
          
          <input type="password" id="mc_pass" name="pass_change_conf" placeholder="Confirm New Password" style="border-radius: 5px;text-align: center;background-image: url(images/pass.png);background-size: 16px;background-repeat: no-repeat;box-shadow: 4px 4px 4px black;width:80%;height:25px;background-color: white;padding-left: 20px;text-align:left;outline: none"><br /><br />

          <input  name = "submit" type="submit" value="Submit" id="preetiii" style="width: 100px; font-weight: bold;outline: none;box-shadow: 0px 3px 0px black;transition-duration: 0.5s;border-width: 0px">
          
           <div style="width:100%;text-align:center;color:yellow;margin-top:30px"><span><?php echo $error; ?></span></div>
        
        </form>
        </div></div>
    <h1 style="margin-top:100px;margin-bottom:20px;font-style:calibri;color:#030333;shadow: 6px black;text-align:left;">Registered Users</h1>
  
        <table style="margin-top:10px;position:absolute;"><tr><th> User Name</th><th>Name</th> </tr>
   
    
    <?php
        $a = array();
        $a = csv_read("user_file.csv");    
        $row = sizeof($a);
        $i;
        
            for($i=0;$i<$row;$i++){
                ?>
    <tr><td><?php echo $a[$i][1]; ?> </td><td><?php echo $a[$i][0]; ?></td></tr>
<?php
            }  
    
    ?>
    </table>
    
<script type="application/javascript">      
    var heig = 0;
   var wid = screen.width;
   
   document.getElementById("re").onclick = function appear(){
       
       document.getElementById("banner").style.display = "block";
       document.getElementById("bannerr").style.display = "none";
       document.getElementById("bannerrr").style.display = "none";
       document.getElementById("nav-links").style.height = "0px";
       heig = 0;
       
   }
    document.getElementById("de").onclick = function appear(){
       
       document.getElementById("banner").style.display = "none";
       document.getElementById("bannerr").style.display = "block";
       document.getElementById("bannerrr").style.display = "none";
        document.getElementById("nav-links").style.height = "0px";
        heig = 0;
   }
     document.getElementById("ch").onclick = function appear(){
       
       document.getElementById("banner").style.display = "none";
       document.getElementById("bannerr").style.display = "none";
       document.getElementById("bannerrr").style.display = "block";
         document.getElementById("nav-links").style.height = "0px";
         heig = 0;
   }
    
    
     document.getElementById("label").onclick = function(){
         if(heig == 0){
         document.getElementById("nav-links").style.height = "200px";
         heig = 1;}
         else{
             document.getElementById("nav-links").style.height = "0px";
             heig = 0;
         }
         
     }
    
      document.getElementById("adm").onclick = function appear(){
       
       document.getElementById("banner").style.display = "none";
       document.getElementById("bannerr").style.display = "none";
       document.getElementById("bannerrr").style.display = "none";
       document.getElementById("nav-links").style.height = "0px";
       heig = 0;
       
   }
      document.getElementById("adm").onmouseover = function(){
          document.getElementById("adm").style.backgroundColor = "#292424";
      }
     document.getElementById("adm").onmouseout = function(){
          document.getElementById("adm").style.backgroundColor = "#4d4d4d";
      }
     
     
    
    </script>
    
    <script type="application/javascript">
    
      <?php 

    if(strcmp($ra,"chg") == 0){
        ?>document.getElementById("bannerrr").style.display = "block";
    <?php
    }
     elseif(strcmp($ra,"del") == 0){
        ?>document.getElementById("bannerr").style.display = "block";
    <?php
    }
     elseif(strcmp($ra,"reg") == 0){
        ?>document.getElementById("banner").style.display = "block";
    <?php
     }
    ?>
    
    </script>
    

 
 
    </body>

</html>
<?php
     }
     else {header("Location: index.php");} 
?>