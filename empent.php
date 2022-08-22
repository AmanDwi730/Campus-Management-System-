<?php
$indexf=fopen("indexp.txt","rwa+") or die("Unable to open file!");
$myfile = fopen("emp.txt", "rwa+") or die("Unable to open file!");	
$E_id=$_POST["E_id"];
$E_name=$_POST["E_name"];
$E_gender=$_POST["E_gender"];
$E_dob=$_POST["E_dob"];
$E_phone=$_POST["E_phone"];
$E_salary=$_POST["E_salary"];
$E_address=$_POST["E_address"];
$E_designation=$_POST["E_designation"];
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
fwrite($myfile, $E_id."|".$E_name."|".$E_gender."|".$E_dob."|".$E_phone."|".$E_salary."|".$E_address."|".$E_designation."\n");

fseek($indexf,0,SEEK_END);
fwrite($indexf,$E_id."|".$k."|\n");
header("Location:Student.php");}
	else{
       

        echo '<script>alert("Duplicate Student ID");window.location.href="empform.php";</script>';
        
    }
?>