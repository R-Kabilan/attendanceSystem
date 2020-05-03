<?php
function csv_read($csv_file){
 
$fh = fopen($csv_file,'r') 
 or die('Error occurred when open the file ' . $csv_file );
 
$data = array();
while($rec = fgetcsv($fh)){
 $data[] = $rec;
}
 
fclose($fh);
return $data;
}

function csv_rm_row($csv_file,$data,$line){ 
$fh = fopen($csv_file,'w');
 
foreach ($data as $rec) {
    if(strcasecmp($rec[1],$line)!=0){
 fputcsv($fh, $rec);}
}
 
fclose($fh);
}

function array_in_complement($check,$var){
    foreach($var as $line){
        
        if(array_slice($line,0,2) == $check){ return 0;}
    }
    return 1;
    
}
