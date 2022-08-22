
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
    <a id="icon" href="DashBoard.php"> <img src="logo/logo1.png" height=80px> </a>

    <a  href="Faculty.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Campus Faculty</h1>
          <p style="font-size:x-large;">Delete Faculty Record </p>


          <form method="post" action="remani.php">
            <label class="A_breed">Faculty ID</label>
            <input class="A_breed" id="box" type="text" name="A_breed"><br><br>
            <button class="btn btn-success"  id="Book"type="submit" name="done">Delete</button>

            </form>


      </div>
      <div style="text-align: right;">
      <img src="images/6.png"  width="50%" style="padding-top:60px;">
  </div>

  </body>
  </html>
