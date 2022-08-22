
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo1.png" type="image/icon type">
  <title>BNMIT-AdminLogin</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
  <style>
  
  </style>

</head>

<body>
  <div class= topnav>
    <a id="icon" href="index.html"> <img src="logo/logo1.png" height=80px> </a><h2 style="font-size:x-large;color:white;"> Campus Management System </h2>
    </div>

    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>
        <br>
        <h1 style="font-size:xxx-large;">
          Admin Login Page</h1>
          <p style="font-size:xx-large;">Login using your uresname and password.</p>

            <form method="post" action="Admin2.php">
              <label class="username" >  <p style="font-size:x-large;">Username:</label>
              <input class="username" type="text" id="username" name="username"></p>
              <label class="password">  <p style="font-size:x-large;">Password: </label>
              <input class="password" type="password" id="password" name="password"></p>
              
            </form>
            <button class="btn btn-success"  id="login"type="submit" name="done">Submit</button>
            </div>
      <div style="text-align: right;">
      <img src="images/ad.png"  width="43%"></div>

  </div>

  </body>
  </html>
