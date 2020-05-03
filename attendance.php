<?php 
	include("check_serv.php");
    if(check_serv()) {
           
?>

<!DOCTYPE>
<html>
<head>
<title >Attendence</title>
     <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="images/attendance.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="application/javascript" >
   
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    
</script>
    </head>
    
<body style="background-color:azure">    
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
    <div style="width:100%;height:20px;text-align:left;margin-top:5%;padding-left:10px"><a href="index.php?logout=1"><img src="images/logout_2.png"style="width:25px;height:18px"><span style="color:black;font-size:20px;margin-left:3px">Click here to Logout</span></a></div>
    <div id="swa" style="transition-duration: 1s">
    <div style="width: 95%;height: 80px">
    <div style="margin-left: 20px;height:100%;overflow:hidden;width:100%" id = "ayu"><h2>Diploma<div id="ass1" style= "width: 50px;height: 20px;background-image:url(images/drop.png);background-repeat: no-repeat;background-size: 30px;background-position: right;transform: rotate(-90deg);float: right;margin-top: 20px;transition-timing-function: ease-in-out;transition-duration: 0.3s"></div></h2></div>
   <div id="man" style="margin-left: 16px">
        <a href="lastpage.php?sem=sem1_data&dir=Diploma&sem_raw=sem1"><div class="sem1">
            <hr />
        <h3>Semester 1</h3>
       </div>  </a>      <hr />
        <a href="lastpage.php?sem=sem2_data&dir=Diploma&sem_raw=sem2"><div class="sem2">
        <h3>Semester 2</h3>
            </div></a> <hr />
        <a href="lastpage.php?sem=sem3_data&dir=Diploma&sem_raw=sem3"><div class="sem3">
        <h3>Semester 3</h3>
            </div> </a><hr />
        <a href="lastpage.php?sem=sem4_data&dir=Diploma&sem_raw=sem4"><div class="sem4">
        <h3>Semester 4</h3>
            </div> </a><hr />
       <a href="lastpage.php?sem=sem5_data&dir=Diploma&sem_raw=sem5"> <div class="sem5">
        <h3>Semester 5</h3>
           </div> </a><hr />
        <a href="lastpage.php?sem=sem6_data&dir=Diploma&sem_raw=sem6"><div class="sem6">
        <h3>Semester 6</h3>
            </div></a> 
        </div>
        
        </div>
    </div>
    
    <div id="pat" style="transition-duration:1s">
    <div  style="width: 95%;height: 80px"><div style="margin-left: 20px;height:100%;overflow:hidden;width:100%" id = "sh"><h2>B.Tech<div id="ass2" style= "width: 50px;height: 20px;background-image:url(images/drop.png);background-repeat: no-repeat;background-size: 30px;background-position: right;transform: rotate(-90deg);float: right;margin-top: 20px;transition-timing-function: ease-in-out;transition-duration: 0.3s"></div></h2></div>
        <div id="lax" style="margin-left: 16px">
        <a href="lastpage.php?sem=sem1_data&dir=Btech&sem_raw=sem1"><div class="sem1">
             <hr />
        <h3>Semester 1</h3>
            </div></a> <hr />
      <a href="lastpage.php?sem=sem2_data&dir=Btech&sem_raw=sem2">  <div class="sem2">
        <h3>Semester 2</h3>
          </div></a> <hr />
        <a href="lastpage.php?sem=sem3_data&dir=Btech&sem_raw=sem3"><div class="sem3">
        <h3>Semester 3</h3>
            </div> </a><hr />
        <a href="lastpage.php?sem=sem4_data&dir=Btech&sem_raw=sem4"><div class="sem4">
        <h3>Semester 4</h3>
            </div> </a><hr />
       <a href="lastpage.php?sem=sem5_data&dir=Btech&sem_raw=sem5"> <div class="sem5">
        <h3>Semester 5</h3>
           </div></a> <hr />
        <a href="lastpage.php?sem=sem6_data&dir=Btech&sem_raw=sem6"><div class="sem6">
        <h3>Semester 6</h3>
            </div></a> <hr />
        <a href="lastpage.php?sem=sem7_data&dir=Btech&sem_raw=sem7"><div class="sem7">
        <h3>Semester 7</h3>
            </div></a> <hr />
        <a href="lastpage.php?sem=sem8_data&dir=Btech&sem_raw=sem8"><div class="sem8">
        <h3>Semester 8</h3>
            
            </div></a></div>
        
    
    </div>
    </div>
    
     <div id="tel" style="transition-duration: 1s">
    <div style="width: 95%;height: 80px"><div style="margin-left: 20px;height:100%;overflow:hidden;width:100%" id = "ku"><h2>M.Tech<div id="ass3" style= "width: 50px;height: 20px;background-image:url(images/drop.png);background-repeat: no-repeat;background-size: 30px;background-position: right;transform: rotate(-90deg);float: right;margin-top: 20px;transition-timing-function: ease-in-out;transition-duration: 0.3s"></div></h2></div>
        <div id= "pramesh" style="ss;margin-left: 16px;">
       <a href="lastpage.php?sem=sem1_data&dir=Mtech&sem_raw=sem1"> <div class="sem1">
             <hr />
        <h3>Semester 1</h3>
           </div></a> <hr />
       <a href="lastpage.php?sem=sem2_data&dir=Mtech&sem_raw=sem2"> <div class="sem2">
        <h3>Semester 2</h3>
           </div> </a><hr />
        <a href="lastpage.php?sem=sem3_data&dir=Mtech&sem_raw=sem3"><div class="sem3">
        <h3>Semester 3</h3>
            </div></a> <hr />
        <a href="lastpage.php?sem=sem4_data&dir=Mtech&sem_raw=sem4"><div class="sem4">
            <h3>Semester 4</h3></div>
            </a> </div>
        
         </div>
    
    </div>
    
   <script type="application/javascript">
       /* function ayush(a){
       setTimeout(kabilan,100);
            
       function kabilan(){
           
document.getElementById(a).style.display = "none";
       }
      }*/
 
   var y = 0;    
document.getElementById("ayu").onclick = function func(){
       if(y==0){
        document.getElementById("swa").style.height = "600px";
         document.getElementById("man").style.display = "block";
           document.getElementById("ass1").style.WebkitTransform = "rotate(0deg)";
           document.getElementById("ass1").style.marginRight= "50px";
            document.getElementById("ass1").style.marginBottom= "20px";
           //comment to separate
            document.getElementById("pat").style.height = "80px";
         document.getElementById("lax").style.display = "none";
        document.getElementById("ass2").style.WebkitTransform = "rotate(-90deg)";
       document.getElementById("ass2").style.marginRight= "0px";
       
            document.getElementById("ass2").style.marginBottom= "0px";
           //mar jao
            document.getElementById("tel").style.height = "80px";
         document.getElementById("pramesh").style.display = "none";
        document.getElementById("ass3").style.WebkitTransform = "rotate(-90deg)";
       document.getElementById("ass3").style.marginRight= "0px";
            document.getElementById("ass3").style.marginBottom= "0px";
          y = y+1 ;
       }
   else{
       document.getElementById("swa").style.height = "80px";
        
       document.getElementById("ass1").style.WebkitTransform = "rotate(-90deg)";
     document.getElementById("ass1").style.marginRight= "0px";
        document.getElementById("ass1").style.marginBottom= "0px";
    
       y = 0;
   }}


 var x = 0;    
document.getElementById("sh").onclick = function func(){
       if(x==0){
        document.getElementById("pat").style.height = "750px";
         document.getElementById("lax").style.display = "block";
           document.getElementById("ass2").style.WebkitTransform = "rotate(0deg)";
            document.getElementById("ass2").style.marginRight= "50px";
            document.getElementById("ass2").style.marginBottom= "20px";
           // nyu
            document.getElementById("swa").style.height = "80px";
         document.getElementById("man").style.display = "none";
       document.getElementById("ass1").style.WebkitTransform = "rotate(-90deg)";
     document.getElementById("ass1").style.marginRight= "0px";
        document.getElementById("ass1").style.marginBottom= "0px";
           //mji
           document.getElementById("tel").style.height = "80px";
         document.getElementById("pramesh").style.display = "none";
        document.getElementById("ass3").style.WebkitTransform = "rotate(-90deg)";
       document.getElementById("ass3").style.marginRight= "0px";
            document.getElementById("ass3").style.marginBottom= "0px";
          x = x+1 ;
       }
   else{
       document.getElementById("pat").style.height = "80px";
        
        document.getElementById("ass2").style.WebkitTransform = "rotate(-90deg)";
       document.getElementById("ass2").style.marginRight= "0px";
       
            document.getElementById("ass2").style.marginBottom= "0px";
       
       x = 0;
   }}

    
 var z = 0;    
document.getElementById("ku").onclick = function func(){
       if(z==0){
           z = z+1 ;
        document.getElementById("tel").style.height = "425px";
         document.getElementById("pramesh").style.display = "block";
           document.getElementById("ass3").style.WebkitTransform = "rotate(0deg)";
            document.getElementById("ass3").style.marginRight= "50px";
            document.getElementById("ass3").style.marginBottom= "20px";
           //
           document.getElementById("swa").style.height = "80px";
         document.getElementById("man").style.display = "none";
       document.getElementById("ass1").style.WebkitTransform = "rotate(-90deg)";
     document.getElementById("ass1").style.marginRight= "0px";
        document.getElementById("ass1").style.marginBottom= "0px";
           //
            document.getElementById("pat").style.height = "80px";
         document.getElementById("lax").style.display = "none";
        document.getElementById("ass2").style.WebkitTransform = "rotate(-90deg)";
       document.getElementById("ass2").style.marginRight= "0px";
       
            document.getElementById("ass2").style.marginBottom= "0px";
          
       }
   else{
       
         z = 0;
       document.getElementById("tel").style.height = "80px";
         
        document.getElementById("ass3").style.WebkitTransform = "rotate(-90deg)";
       document.getElementById("ass3").style.marginRight= "0px";
            document.getElementById("ass3").style.marginBottom= "0px";
       }}
</script>   
</body>
</html>
<?php } else  { header("Location: index.php"); } ?>