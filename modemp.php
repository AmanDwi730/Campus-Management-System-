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

    <a  href="Student.php">GO Back</a>

    </div>



    <div class="home" id="home">
      <div style="float: left;padding:20px" width='50%'>

        <h1 style="font-size:xxx-large;">
          Z-00 Employee</h1>
          <p style="font-size:x-large;">Modify Form</p>

          <form method="post"action ="modiemp.php">
            <label class="E_id">Enter Employee ID to Modify</label>
            <input class="E_id"  id="box" type="number" name="E_id"><br><br>
            <label class="A_id">Enter New Employee Id / Re-enter Employee Id</label>
            <input class="A_id"  id="box"type="number" name="A_id"><br><br>
            <label class="E_name">Name</label>
            <input class="E_name" id="box" type="text" name="E_name"><br><br>
            <label class="E_gender">Gender</label>
            <input class="E_gender"  id="box"type="text" name="E_gender"><br><br>
            <label class="E_dob">Date of Birth:</label>
            <input class="E_dob"  id="box"type="date" name="E_dob"><br><br>
            <label class="E_phone">Phone</label>
            <input class="E_phone" id="box" type="number" name="E_phone"><br><br>
            <label class="E_salary">Salary</label>
            <input class="E_salary" id="box" type="number" name="E_salary"><br><br>
            <label class="E_address">Address</label>
            <input class="E_address" id="box" type="text" name="E_address"><br><br>
            <label class="E_designation">Designation</label>
            <input class="E_designation"  id="box"type="text" name="E_designation"><br><br>
            <button class="btn btn-success"  id="Book" type="submit" name="done">Submit</button>



            </form>
      </div>
      <div style="text-align: right;">
      <img src="images/pan.png"  width="50%"></div>

  </div>


      <div class="container3">
        <center>FS mini project by Harshit Kant Verma , Rahul Saraf And Surya </center></div>
  </body>
  </html>
