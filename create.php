<?php include("csv_func.php");
         
	if(true) {
    $sem = $_GET["sem"];
    $sem = substr($sem,0,-4);    
    $branch = $_GET["dir"];
    //$sub = "Practical-Power Electronics-I(Code-DT-204) G2";
    $sub = $_POST["subject"]; //remove the above line and uncomment this line after ayush   
    $dir_names = "Database/".$branch."/".$sem.".csv";
    $dir_attendance="daily/".$branch."/".$sem."/".$sub.".csv";
    
    if(strcmp($sub,"0")==0 ){
        header("location:record.php".$dir);}    


        $present = csv_read($dir_attendance);
        $present_size = sizeof($present[0]);   
        $names = csv_read($dir_names);
        
        $index= array();
        
        for($i = 0; $i < $present_size;$i++){
            if(strcmp($present[0][$i],"A")==0)
                array_push($index,$i-2);
        }
        
        $index_size = sizeof($index);
        
        $dump=fopen("daily/dump.csv","w+");
            fwrite($dump,$sub."\r\n");
            if($present_size <= 2 || strcmp($present[0][0],date("m/d/y")) !== 0) //add or condition to check date
                fwrite($dump,"There is no attendance for this class today.\r\n");
            elseif($index_size == 0)
                fwrite($dump,"There are no absentes today.\r\n");
            else
            foreach ($index as $value) {
                fwrite($dump,$names[$value][0].",".$names[$value][3]."\r\n");
                
            }    
        fwrite($dump,"\r\n");
        fclose($dump);
        //header("location: daily/dump.csv ");
        header("Content-type:application/csv");
        header("Content-Disposition:attachment;filename=".date("d.m.y")." ".$sub.".csv");
        readfile("daily/dump.csv");
        
       
 
    } 
else{
        header("location: index.php?logout=1");
        } 
    ?> 