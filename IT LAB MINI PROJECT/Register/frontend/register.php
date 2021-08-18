<?php
include('C:\xampp\htdocs\IT LAB MINI PROJECT\Register\backend\register.php');

?>
<?php
$row = getSeatCount();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CEG | slot booking</title>
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
                    <li><a href="http://localhost/project/IT%20LAB%20MINI%20PROJECT/display/frontend/registered.php">View Booked Slot</a></li>
                    <li><a href="http://localhost/project/CLUBS_PAGE/frontend/clubs_login.php">Clubs</a></li>
                    <li><a href="http://localhost/project/HOME%20PAGE/frontend/project.php">Home</a></li>
                </ul>
            </nav>

  </div>
  </header>

        <header style="text-align:center; font-size: 20px; background:#4d0d0d;"> SLOT BOOKING FORM</header> <br>
        <section style="background:#ffeded; width:50%; padding-left:200px; margin:auto; height:380px; opacity:0.97;" >
        <form action="" method="POST"><br><br>
            <table class="form-table">
                <tr> <br>
                    <th style="color: #941212; font-size: 16px;">STUDENT NAME:</th>
                    <td><input style="border:1px silver; height:25px;" type="text" size="34.5" name="name" id="" required></td>
                </tr>
                <tr>
                    <th style="color: #941212; font-size: 16px;"><br>REGISTER NO:</th>
                    <td><br><input  style="border:1px silver; height:25px;" type="text" size="34.5" name="regnum" id="" required></td>
                </tr>
                <tr>
                    <th style="color: #941212; font-size: 16px;"><br>EMAIL ADDRESS:</th>
                    <td><br><input   style="border:1px silver; height:25px;" type="email" size="34.5" name="email" id="" required></td>
                </tr>
                <tr>
                  <th style="color: #941212; font-size: 16px; "><br>EVENT SESSIONS:</th>
                    <td>
                      <br>  <select style="border:1px silver; height:25px;" name="prac_sess" id="" required>

                            <option value="1">Tuesday---|09:00 – 11:00| Seat count:<?php echo trim($row[0]) ?> </option>
                            <option value="2">Wednesday---|14:00 – 16:00| Seat count:<?php echo trim($row[1]) ?></option>
                            <option value="3">Thursday---|09:00 – 10:00| Seat count:<?php echo trim($row[2]) ?></option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th colspan="2" style="text-align: center;"><br><br>
                        <input style="border:1px silver; height:25px; background: #941212; color:#ffeded;" type="submit" name="submit" value="submit">
                        <br><br>
                        <!-- <a href="http://localhost/project/IT%20LAB%20MINI%20PROJECT/display/frontend/registered.php">View Booked Slot</a> -->
                    </th>
                </tr>

                <?php
                if ($response) {
                ?>
                    <tr>
                        <td colspan="2">
                            <?php
                            echo ($response["message"]);
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </table>
        </form>
      </section>
    <script src="register.js"></script>
</body>

</html>
