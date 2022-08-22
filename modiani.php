

<html>
<?php
	$indexf=fopen("indexa.txt","rwa+") or die("Unable to open file!");
    $myfile = fopen("ani.txt", "rwa+") or die("Unable to open file!");	
    $A_Name=$_POST['A_Name'];
    $A_age=$_POST['A_age'];
    $A_breed=$_POST['A_breed'];
    $A_breed2=$_POST['A_breed2'];
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
$asd=0;
$flag =0;
$found;
$i =0;
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($A_breed,$v)) == 0)& $flag == 0){
	  
	    
        $flag = 1;
        $found = $index[$i][1];
        
        fseek($myfile,$found,SEEK_SET);
        fwrite($myfile,"?");
       
        for($j=($i+1);$j<$indsize;$j++){
        $index[($j-1)][1] = $index[($j)][1];
        $index[($j-1)][0] = $index[($j)][0];}
        $indsize--;
        fclose($indexf);
        $indexf=fopen("indexa.txt","w+") or die("Unable to open file!");
        for($j=0;$j<$indsize;$j++){
            fwrite($indexf,$index[$j][0]."|".$index[$j][1]."|\n");
            
        }
        $asd=1;
        break;}
        
        
       else{ 
       $i ++;}
        
       
        
      }
	
			


	
	if($flag ==0){
		echo '<script>alert("INVALID Animal Breed");window.location.href="modani.php";</script>';
	}
	
$low = 0;

$flag =0;
$found;
$i =0;
if($asd==1){
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
fwrite($myfile, $A_breed2."|".$A_Name."|".$A_age."|".$A_feed."\n");

fseek($indexf,0,SEEK_END);
fwrite($indexf,$A_breed2."|".$k."|\n");
header("Location:Faculty.php");}
	else{
       

        echo '<script>alert("Duplicate Breed");window.location.href="modani.php";</script>';
        
    }}
?>
</html>