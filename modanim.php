
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="logo/logo.png" type="image/icon type">
  <title>Zoo</title>
  <link rel="stylesheet" href="styles2.css">
  <script src="myScript.js"></script>
  <style>

    #Book {
       background:#f4da01;
       color:black;
       border:1pxsolid#eee;
       border-radius:20px;
       box-shadow:5px5px5px#eee;
       text-shadow:none;
       padding: 20px 20px 20px 20px;
       font-size:x-large;
    }
    #Book:hover {
       background:black;
       color:white;
       border:1pxsolid#eee;
       border-radius:20px;
       box-shadow:5px5px5px#000000;
       text-shadow:none;
       padding:  20px 20px 20px 20px;
       font-size:x-large;
    }
    #box{
      font-family: inherit;
      width: 100%;
      border: 0;
      border-bottom: 2px solid black;
      outline: 0;
      font-size: 1.3rem;
      color: white;
      padding: 7px 0;
      background: transparent;
      transition: border-color 0.2s;
    }
  </style>
</head>

<body>
  <div class= topnav>
    <a id="icon" href="index.php"> <img src="logo/logo.png" height=80px> </a>

    <a  href="Faculty.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Z-00 Faculty</h1>
          <p style="font-size:x-large;">Modify the Record</p>
          <form method="post" action ="modiani.php">
            <label class="A_breed">Enter Animal Breed of Record to be Modified</label>
            <input class="A_breed" id="box" type="text" name="A_breed"><br><br>
            
            <label class="A_breed2">Enter New Animal Breed/ Re-Enter Animal Breed </label>
            <input class="A_breed2" id="box" type="text" name="A_breed2"><br><br>
            <label class="A_Name">Animal Name</label>
            <input class="A_Name" id="box" type="text" name="A_Name"><br><br>
            <label class="A_age">Animal Age</label>
            <input class="A_age"  id="box"type="number" name="A_age"><br><br>
            <label class="A_feed">Animal Feed</label>
            <input class="A_feed" id="box" type="text" name="A_feed"><br><br>
            <button class="btn btn-success"  id="Book"type="submit" name="done">Modify</button>

            </form>


      </div>
      <div style="text-align: right;">
      <img src="images/wol.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya</center></div>
  </body>
  </html>
