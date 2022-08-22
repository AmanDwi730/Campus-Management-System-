<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo1.png" type="image/icon type">
  <title>BNMIT</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
</head>

<body>
  <div class= topnav>
    <a id="icon" href="index.php"> <img src="logo/logo1.png" height=80px> </a>

    <a  href="Student.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Campus Student</h1>
          <p style="font-size:x-large;">Search for Student Record</p>

          <form method="post">
            <label class="E_id">Student ID</label>
            <input class="E_id"  id="box" type="text" name="E_id"><br><br>
            <br><br>
            <button class="btn btn-success"  id="Book" type="submit" name="done">Search</button>

            </form>
            <br>
            <br>
            <table  ><thead><th>S_ID&nbsp</th><th>Name&nbsp</th><th>Gender&nbsp</th><th>DOB&nbsp</th><th>Phone&nbsp</th><th>Fees&nbsp</th><th>Address&nbsp</th><th> Quota&nbsp</th></thead>
            <?php 
            if(isset($_POST['done'])){
            $myfile = fopen("emp.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
            $index = array();
            $E_id = $_POST["E_id"];
	
      $indsize = sizeof($index);
      $a = array();
      $list = array(array(),array());
      if($indexf)
      {
        while(($line=fgets($indexf))!=false)
        {
          
          $str_arr = explode("|",$line);
          $index[$indsize]=array("$str_arr[0]","$str_arr[1]");
          
          
          $indsize ++;
          
        }
        
      }
      
      for ($i=0;$i<$indsize;$i++){
        $a[$i] = $index[$i][0];
      }
      sort($a);
      $indexf = fopen("indexp.txt", "r") or die("Unable to open file!");
      $low = 0;

      $flag =0;
      $found;
      $i =0;
      while($i<sizeof($a))
      {
        $v= $index[$i][0];
        if(((strcmp($E_id,$v)) == 0)& $flag == 0)
                {
                                
                  while(($line=fgets($indexf))!=false)
                  {
                      
                      $str_arr = explode("|",$line);
                      if($str_arr[0]==$v)
                      {
                          $position = $str_arr[1];
                          
                          fseek($myfile,$position,SEEK_SET);
                          $line1=fgets($myfile);
                          $val_arr = explode("|",$line1);
                        
                                ?>	
                              <tr>
                                <td><?php echo $val_arr[0]; ?></td>
                                <td><?php echo $val_arr[1]; ?></td>
                                <td><?php echo $val_arr[2]; ?></td>
                                <td><?php echo $val_arr[3]; ?></td>
                                <td><?php echo $val_arr[4]; ?></td>
                                <td><?php echo $val_arr[5]; ?></td>
                                <td><?php echo $val_arr[6]; ?></td>
                                <td><?php echo $val_arr[7]; ?></td><?php
                                
                      }
                    
                  }
                  break;
                }
          $i++;
      }
      if($i==sizeof($a))
      {
        echo '<script>alert("Data Not Found");window.location.href="seremp.php";</script>';
      }
      
     } ?>
                      </table>
      </div>
      <div style="text-align: right;">
      <img src="images/1.png"  width="50%" style="padding-top:50px;"></div>

  </div>
  </body>
  </html>
