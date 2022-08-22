

<html>
<?php
	$myfile = fopen("emp.txt", "rw+") or die("Unable to open file!");

$indexf=fopen("indexp.txt","rw+") or die("Unable to open file!");
	
	$E_id = $_POST["E_id"];
	
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
	if(((strcmp($E_id,$v)) == 0)& $flag == 0){
	  
	  $flag = 1;
	  $found = $index[$i][1];
	  
	  fseek($myfile,$found,SEEK_SET);
	  fwrite($myfile,"#");
	 
	  for($j=($i+1);$j<$indsize;$j++){
	  $index[($j-1)][1] = $index[($j)][1];
	  $index[($j-1)][0] = $index[($j)][0];}
	  $indsize--;
	  fclose($indexf);
	  $indexf=fopen("indexp.txt","w+") or die("Unable to open file!");
	  for($j=0;$j<$indsize;$j++){
		  fwrite($indexf,$index[$j][0]."|".$index[$j][1]."|\n");
		  header("Location: Student.php");
	  }
	  break;}
	  
	  
	 else{ 
	 $i ++;}
	  
	 
	  
	}
	
	
			


	
	if($flag ==0){
		echo '<script>alert("INVALID Emloyee ID");window.location.href="delemp.php";</script>';
	}
	

?>
</html>