
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

    <a  href="Faculty.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Campus Faculty</h1>
          <p style="font-size:x-large;">Search for Faculty Record</p>


          <form method="post">
            <label class="A_breed">Faculty ID</label>
            <input class="A_breed" id="box" type="text" name="A_breed"><br><br>
            <button class="btn btn-success"  id="Book"type="submit" name="done">Search</button>

            </form>
            <br>
            <br>
            <table  ><thead> <th>F_ID   </th><th>Name   </th><th>Salary   </th><th>Designation </th></thead>
            <?php
            if(isset($_POST['done'])){
            $myfile = fopen("ani.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
            $index = array();
            $A_breed = $_POST["A_breed"];
	
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
      $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
      $low = 0;

      $flag =0;
      $found;
      $i =0;
      while($i<sizeof($a))
      {
        $v= $index[$i][0];
        if(((strcmp($A_breed,$v)) == 0)& $flag == 0)
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
                      </tr><?php
                                
                      }
                    
                  }
                  break;
                }
          $i++;
      }
      if($i==sizeof($a))
      {
        echo '<script>alert("Data Not Found");window.location.href="searchanim.php";</script>';
      }
      
     } ?>
                      </table>
        


      </div>
      <div style="text-align: right;">
      <img src="images/6.png"  width="50%" style="padding-top:60px;">

  </div>

  </body>
  </html>
