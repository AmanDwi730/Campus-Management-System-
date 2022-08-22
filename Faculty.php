<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo1.png" type="image/icon type">
  <title>BNMIT</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
</head>

<body id="b1">
  <div class= topnav>
    <a id="icon" href="DashBoard.php"> <img src="logo/logo1.png" height=80px> </a>
    <a href="DashBoard.php">Dashboard</a>
    <a href="Student.php">Student Details</a>
    <a class="active" href="Faculty.php">Faculty Details</a>
    <a href="Admin.php">Log Out</a>
    </div>
    


    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>
        <br>
        <h1 style="font-size:xxx-large;">
          Campus Management System</h1>
          <p style="font-size:x-large;">Faculty Details.</p>
          <table ><thead><th> F_id </th><th>Name   </th><th> Salary </th><th>Dessign. </th></thead>
          <?php
          $myfile = fopen("ani.txt", "r") or die("Unable to open file!");
            $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
            $index = array();
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
      $i =0;
      while($i<sizeof($a))
      {
            $indexf = fopen("indexa.txt", "r") or die("Unable to open file!");
            if($indexf)
                {
                  while(($line=fgets($indexf))!=false)
                  {
                      
                      $str_arr = explode("|",$line);
                      if($str_arr[0]==$a[$i])
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
                                <td><?php echo $val_arr[3]; ?></td></tr><?php
                                
                              }
                            
                          }
                        }
                  $i++;
              }
              
                      ?>
              </table>

              <?php  // Close connection ?>
              <br>
<button onclick="location.href='searchanim.php';" >Search Value</button>&nbsp&nbsp
<button onclick="location.href='delanim.php';" >Delete Value</button><br><br>
<button onclick="location.href='animalform.php';" >Enter Value&nbsp&nbsp</button>&nbsp&nbsp
<button onclick="location.href='Dataf.php';" >Data File&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button><br><br>
<button onclick="location.href='Indexf.php';" >Index File&nbsp&nbsp&nbsp&nbsp&nbsp</button>&nbsp&nbsp

      </div>
      <div style="text-align: right;">
      <img src="images/6.png"  width="50%" style="padding-top:50px;"></div>

  </div>

  </body>
  </html>
