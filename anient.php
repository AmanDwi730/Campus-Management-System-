<?php
$indexf=fopen("indexa.txt","rwa+") or die("Unable to open file!");
$myfile = fopen("ani.txt", "rwa+") or die("Unable to open file!");	
$A_Name=$_POST['A_Name'];
$A_age=$_POST['A_age'];
$A_breed=$_POST['A_breed'];
$A_feed=$_POST['A_feed'];
$index=array();
$indsize = sizeof($index);
if($indexf)
{
	while(($line=fgets($indexf))!=false)
	{
		
		$str_arr = explode("|",$line);
		$index[$indsize]=array("$str_arr[0]","$str_arr[1]");
		$p = $index[$indsize][0];
		
		$indsize ++;
		
	}
	
}

$low = 0;

$flag =0;
$found;
$i =0;
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($A_breed,$v)) == 0)& $flag == 0){
		
	  
	$flag = 1;
	
	  
	  
	 
	  
	  break;
	  
	}
	
	else{
		$i ++;	}
}
if($flag == 0){
 fseek($myfile,0,SEEK_END);
 
 
$k= ftell($myfile);
fwrite($myfile, $A_breed."|".$A_Name."|".$A_age."|".$A_feed."\n");

fseek($indexf,0,SEEK_END);
fwrite($indexf,$A_breed."|".$k."|\n");
header("Location:Faculty.php");}
	else{
       

        echo '<script>alert("Duplicate Faculty ID");window.location.href="animalform.php";</script>';
        
    }
?>