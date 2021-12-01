<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
      <link rel="stylesheet" href="style1.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
    </ul>
      <br><br>
      <h1 class="labs1">VARIOUS COMPETITIONS</h1>
      <br><br>
      <form action="" method="post">
        <!-- <label class="labs" for="CATEGORY">BRANCH : </label>
        <select class="dm animate__animated animate__backInDown" id="category" name="category">
          <option class="dm1" value="SCHOOL">SCIENCE</option>
          <option class="dm1" value="COLLEGE">COMMERCE</option>
          <option class="dm1" value="PROFESSIONAL">HUMANITIES</option>
        </select> -->
      <div class="til animate__animated animate__backInDown">FIELD : </div>
      <input class="inp1 animate__animated animate__backInDown" type="text" name="category" /><br>

      <div class="til animate__animated animate__backInDown">PRICE : </div>
      <input class="inp1 animate__animated animate__backInDown" type="text" name="term" /><br>

      <div class="til animate__animated animate__backInDown">MAX ATTEMPTS : </div>
      <input class="inp1 animate__animated animate__backInDown" type="text" name="term2" /> 
      <br><br>
      <input class="sub1 animate__animated animate__backInDown" type="submit" value="Find Exams" /> 
      </form> 
      <br><br>
      <?php
      $server = "localhost";
      $username = "root";
      $password = "";
      $dbname = "iip";
      $con = mysqli_connect($server, $username, $password,$dbname);
      if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
      }
      $term = $_POST['category'];
      $term1 = $_POST['term'];
      $term2 = $_POST['term2'];
      $sql = "SELECT * FROM proj_tab WHERE PURPOSE LIKE '%$term%' and APPLICATION_FEE <= '$term1' and ALLOWED_ATTEMPTS <= '$term2'";
      $result = $con->query($sql);
      ?>
      <table class ="tabd animate__animated animate__backInLeft" >
      <thead>
        <tr>
          <th>NAME OF EXAM</th>
          <th>CONDUCTED BY</th>
          <th>PURPOSE</th>
          <th>ELIGIBILITY</th>
          <th>APPLICATION MODE</th>
          <th>APPLICATION FEE(INR)</th>
          <th>EXAM MODE</th>
          <th>ALLOWED ATTEMPTS</th>
          <th>EXAM DATE</th>
          <th>DURATION(HRS.)</th>
          <th>LINK</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = $result->fetch_assoc()) {
            echo
            "<tr>
              <td>{$row['NAME_OF_EXAM']}</td>
              <td>{$row['CONDUCTED_BY']}</td>
              <td>{$row['PURPOSE']}</td>
              <td>{$row['ELIGIBILITY']}</td>
              <td>{$row['APPLICATION_MODE']}</td>
              <td>{$row['APPLICATION_FEE']}</td>
              <td>{$row['EXAM_MODE']}</td>
              <td>{$row['ALLOWED_ATTEMPTS']}</td>
              <td>{$row['EXAM_DATE']}</td>
              <td>{$row['EXAM_DURATION']}</td>
              <td ><a class='btnd' href='{$row['link']}'>VISIT</a></td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php $con->close();; ?>
     <br><br><br>
    <button class="btd1"> <a class="btd1" href="insert.php">INSERT PAGE (ADMINS ONLY) </a> </button>
    </body>
    </html>