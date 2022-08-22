
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo1.png" type="image/icon type">
  <title>BNMIT</title>
  <link rel="stylesheet" href="styles2.css">
  
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
          <p style="font-size:x-large;">Entry Form</p>

          <form method="post" action="empent.php">
            <label class="E_id">Student ID</label>
            <input class="E_id"  id="box" type="text" name="E_id"><br><br>
            <label class="E_name">Name</label>
            <input class="E_name" id="box" type="text" name="E_name"><br><br>
            <label class="E_gender">Gender</label>
            <input class="E_gender"  id="box"type="text" name="E_gender"><br><br>
            <label class="E_dob">Date of Birth:</label>
            <input class="E_dob"  id="box"type="date" name="E_dob"><br><br>
            <label class="E_phone">Phone</label>
            <input class="E_phone" id="box" type="number" name="E_phone"><br><br>
            <label class="E_salary">Fees</label>
            <input class="E_salary" id="box" type="text" name="E_salary"><br><br>
            <label class="E_address">Address</label>
            <input class="E_address" id="box" type="text" name="E_address"><br><br>
            <label class="E_designation">Quota</label>
            <input class="E_designation"  id="box"type="text" name="E_designation"><br><br>
            <button class="btn btn-success"  id="Book" type="submit" name="done">Submit</button>

            </form>
      </div>
      <div style="text-align: right;">
      <img src="images/1.png"  width="50%" style="padding-top:60px;"></div>

  </div>

  </body>
  </html>
