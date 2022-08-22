


<?php
	$myfile = fopen("ani.txt", "rw+") or die("Unable to open file!");

$indexf=fopen("indexa.txt","rw+") or die("Unable to open file!");
	
$A_breed=$_POST['A_breed'];
	
	$index = array();
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
	  $found = $index[$i][1];
	  
	  fseek($myfile,$found,SEEK_SET);
	  fwrite($myfile,"#");
	 
	  for($j=($i+1);$j<$indsize;$j++){
	  $index[($j-1)][1] = $index[($j)][1];
	  $index[($j-1)][0] = $index[($j)][0];}
	  $indsize--;
	  fclose($indexf);
	  $indexf=fopen("indexa.txt","w+") or die("Unable to open file!");
	  for($j=0;$j<$indsize;$j++){
		  fwrite($indexf,$index[$j][0]."|".$index[$j][1]."|\n");
		  header("Location:delanim.php");
	  }
	  break;}
	  
	  
	 else{ 
	 $i ++;}
	  
	 
	  
	}
	
	
			


	
	if($flag ==0){
		echo '<script>alert("INVALID Animal Breed");window.location.href="delanim.php";</script>';
	}
	
	header("Location:Faculty.php");
?>
