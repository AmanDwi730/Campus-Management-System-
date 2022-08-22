

<html>
<?php
	$myfile = fopen("emp.txt", "rw+") or die("Unable to open file!");

$indexf=fopen("indexp.txt","rw+") or die("Unable to open file!");
	
$E_id=$_POST["E_id"];
$A_id=$_POST["A_id"];
$E_name=$_POST["E_name"];
$E_gender=$_POST["E_gender"];
$E_dob=$_POST["E_dob"];
$E_phone=$_POST["E_phone"];
$E_salary=$_POST["E_salary"];
$E_address=$_POST["E_address"];
$E_designation=$_POST["E_designation"];
	
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
$asd=0;
$flag =0;
$found;
$i =0;
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($E_id,$v)) == 0)& $flag == 0){
	  
	    
        $flag = 1;
        $found = $index[$i][1];
        
        fseek($myfile,$found,SEEK_SET);
        fwrite($myfile,"?");
       
        for($j=($i+1);$j<$indsize;$j++){
        $index[($j-1)][1] = $index[($j)][1];
        $index[($j-1)][0] = $index[($j)][0];}
        $indsize--;
        fclose($indexf);
        $indexf=fopen("indexp.txt","w+") or die("Unable to open file!");
        for($j=0;$j<$indsize;$j++){
            fwrite($indexf,$index[$j][0]."|".$index[$j][1]."|\n");
            
        }
        $asd=1;
        break;}
        
        
       else{ 
       $i ++;}
        
       
        
      }
	
			


	
	if($flag ==0){
		echo '<script>alert("INVALID Emloyee ID");window.location.href="modemp.php";</script>';
	}
	
$low = 0;

$flag =0;
$found;
$i =0;
if($asd==1){
while($i<$indsize){
	
	$v= $index[$i][0];
	if(((strcmp($E_id,$v)) == 0)& $flag == 0){
		
	  
	$flag = 1;
	
	  
	  
	 
	  
	  break;
	  
	}
	
	else{
		$i ++;	}
}
if($flag == 0){
 fseek($myfile,0,SEEK_END);
 
 
$k= ftell($myfile);
fwrite($myfile, $A_id."|".$E_name."|".$E_gender."|".$E_dob."|".$E_phone."|".$E_salary."|".$E_address."|".$E_designation."\n");

fseek($indexf,0,SEEK_END);
fwrite($indexf,$A_id."|".$k."|\n");
header("Location:Student.php");}
	else{
       

        echo '<script>alert("Duplicate Emloyee ID");window.location.href="modemp.php";</script>';
        
    }}
?>
</html>