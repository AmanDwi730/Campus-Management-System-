
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo1.png" type="image/icon type">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>

</head>

<body>
  <div class= topnav>
    <a id="icon" href="DashBoard.html"> <img src="logo/logo1.png" height=80px> </a>

    <a  href="Faculty.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Campus Faculty</h1>
          <p style="font-size:x-large;">Entry Form</p>


          <form method="post" action="anient.php">
            <label class="A_breed">Faculty ID</label>
            <input class="A_breed" id="box" type="text" name="A_breed"><br><br>
            <label class="A_Name">Faculty Name</label>
            <input class="A_Name" id="box" type="text" name="A_Name"><br><br>
            <label class="A_age">Faculty Salary</label>
            <input class="A_age"  id="box"type="text" name="A_age"><br><br>
            <label class="A_feed">Faculty Designation</label>
            <input class="A_feed" id="box" type="text" name="A_feed"><br><br>
            <button class="btn btn-success"  id="Book"type="submit" name="done">Submit</button>

            </form>


      </div>
      <div style="text-align: right;">
      <img src="images/6.png"  width="50%" style="padding-top:60px;"></div>

  </div>

  </body>
  </html>
