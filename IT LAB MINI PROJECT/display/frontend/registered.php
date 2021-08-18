<?php
include('C:\xampp\htdocs\IT LAB MINI PROJECT\display\backend\registered.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CEG | View Slot</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="register.css"> -->
    <link rel="stylesheet" href="project.css">
    <link rel="shortcut icon" href="AU_logo.ico">
</head>

<body style=" background: url(redbrick.jpg) no-repeat; background-size: cover;">
  <header>
    <div class="container">
            <div id="brand">
                    <img src="AU_logo.jpg" alt="logo" height="100" width="100">
                    <h1>College of Engineering Guindy</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="http://localhost/project/IT%20LAB%20MINI%20PROJECT/Register/frontend/register.php">Book Slot</a></li>
                    <li><a href="http://localhost/project/CLUBS_PAGE/frontend/clubs_login.php">Clubs</a></li>
                    <li><a href="http://localhost/project/HOME%20PAGE/frontend/project.php">Home</a></li>
            </nav>

  </div>
  </header>
       <header style="text-align:center; font-size: 20px; background:#4d0d0d;"> SLOT VIEW</header><br><br>
    <div class="container">
         <section style="background:#ffeded; width:50%; padding-left:150px; margin:auto; height:520px; border-right: 5px solid #26a324; border-left: 5px solid #f71495; border-top: 5px solid #3224ff; border-bottom: 5px solid #f4ff19; opacity:0.97;">
         <table class="form-table">
            <tr>
                <th style="color: #941212; font-size: 16px;">Tuesday, 09:00 – 11:00:</th>
                <td>
                    <?php
                    $row = getStudNamesOfSes(1);
                    if ($row == []) {
                        echo ("None registered");
                    }
                    foreach ($row as $key => $value) {
                          echo "<p style='color: #26a324; font-size: 16px; font-weight: bold;'>&nbsp &nbsp &nbsp$value</p>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th style="color: #941212; font-size: 16px;">Wednesday, 14:00 – 16:00:</th>
                <td>
                    <?php
                    $row = getStudNamesOfSes(2);
                    if ($row == []) {
                        echo ("None registered");
                    }

                    foreach ($row as $key => $value) {
                          echo "<p style='color:#f71495; font-size: 16px; font-weight: bold;'>&nbsp &nbsp &nbsp $value</p>";
                    }
                    ?>
                </td>

            </tr>
            <tr>
                <th style="color: #941212; font-size: 16px;">Thursday, 09:00 – 10:00:</th>
                <td>
                    <?php
                    $row = getStudNamesOfSes(3);
                    if ($row == []) {
                        echo ("None registered");
                    }
                    foreach ($row as $key => $value) {
                      echo "<p  style='color:#3224ff; font-size: 16px; font-weight: bold;'>&nbsp &nbsp &nbsp$value</p>";
                    }
                    ?>
                </td>

            </tr>
        </table>
    </section>
  </div>
</body>

</html>
