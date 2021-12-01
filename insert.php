<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<ul>  
    <li><a class="active" href="#2">CONTACT</a></li> 
    <li>
        <select class="ddl1" id="" name="OPTIONS" onchange = "location = this.value;">
          <option class="ddl3" value="" selected>SERVICES</option>
          <option class="ddl2" value="#3"> CHAT WITH MENTORS </option>
          <option class="ddl2" value="#4">WHAT TO DO AFTER</option>
          <option class="ddl2" value="#5">VARIOUS COMPETITION</option>
        </select>
    </li>
    <li><a class="active" href="#home">HOME</a></li>
    <li class="lic1"><img src="simg.png" class="tf01 imga" alt=""></li>
    <li class="lic1"><p class="tf012">KNOWVERSITY</p></li>
</ul> <br><br>
<h1 class="labs1">ENTER EXAM DETAILS</h1><br><br>
<form action="" method="post">
  <div class="til animate__animated animate__backInDown ta">NAME OF THE EXAM : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in1" /><br>

  <div class="til animate__animated animate__backInDown ta">CONDUCTED BY : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in2" /><br>

  <div class="til animate__animated animate__backInDown ta">PURPOSE OF THE EXAM : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in3" /><br>

  <div class="til animate__animated animate__backInDown ta">ELIGIBILITY : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in4" /><br>

  <div class="til animate__animated animate__backInDown ta">APPLICATION MODE : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in5" /><br>

  <div class="til animate__animated animate__backInDown ta">APPLICATION FEE : </div>
  <input class="inp1 animate__animated animate__backInDown" type="number" name="in6" /><br>

  <div class="til animate__animated animate__backInDown ta">MODE OF EXAM : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in7" /><br>

  <div class="til animate__animated animate__backInDown ta">ATTEMPTS ALLOWED : </div>
  <input class="inp1 animate__animated animate__backInDown" type="number" name="in8" /><br>

  <div class="til animate__animated animate__backInDown ta">EXAM DATE : </div>
  <input class="inp1 animate__animated animate__backInDown" type="date" name="in9" /><br>

  <div class="til animate__animated animate__backInDown ta">EXAM DURATION : </div>
  <input class="inp1 animate__animated animate__backInDown" type="number" name="in10" /><br>

  <div class="til animate__animated animate__backInDown ta">LINK : </div>
  <input class="inp1 animate__animated animate__backInDown" type="text" name="in11" /><br><br><br>

  <input class="sub1 animate__animated animate__backInDown" type="submit" value="ENTER DATA" /> 
</form> 
<?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "iip";
      $con = mysqli_connect($server, $username, $password,$dbname);
      if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
      }
      $term = $_POST['in1'];
      $term1 = $_POST['in2'];
      $term2 = $_POST['in3'];
      $term3 = $_POST['in4'];
      $term4 = $_POST['in5'];
      $term5 = $_POST['in6'];
      $term6 = $_POST['in7'];
      $term7 = $_POST['in8'];
      $term8 = $_POST['in9'];
      $term9 = $_POST['in10'];
      $term10 = $_POST['in11'];
      $sql = "INSERT INTO `proj_tab` (`NAME_OF_EXAM`, `CONDUCTED_BY`, `PURPOSE`, `ELIGIBILITY`, `APPLICATION_MODE`, `APPLICATION_FEE`, `EXAM_MODE`, `ALLOWED_ATTEMPTS`, `EXAM_DATE`, `EXAM_DURATION`,`link`) VALUES ('$term', '$term1', '$term2', '$term3', '$term4', '$term5', '$term6', '$term7', '$term8', '$term9', '$term10');";
      $result = mysqli_query($con, $sql);

      ?>
       <?php $con->close();; ?>
</body>
</html>