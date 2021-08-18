<?php
include('C:\xampp\htdocs\project\PROF RATING\backend\form.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>College of Engineering Guindy | Responsive from</title>
  <link rel="stylesheet" href="project.css">
  <link rel="shortcut icon" href="AU_logo.ico">
      <meta charset ="UTF-8"/>
      <meta name ="keywords" content="html, css, js"/>
      <meta name ="author" content="YOGESH V, 2020115107" />
      <meta name ="robots" content="index,follow"/>
      <meta name ="language" content="EN_US"/>
      <meta name ="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
  <form action = "" method = "POST">
<h1 id="form1">College of Engineering Guindy</h1>
 <h2 id="form2">Responsive Form</h2>
 <div class="container">
 <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0;" for="name">Enter Name : </label>
     <input style="border:1px solid #dedede; height:22px;"type="text" size="40" name="name" placeholder="Name..." required><br><br>
 <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0;" for="date">Enter Date of Birth : </label>
     <input style="border:1px solid #dedede; height:22px;"type="date" name="date" required><br>
     <h4 style="font-size: 18px; height: 25px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0; border-bottom:2px solid #4d0d0d;">Enter Your Tag:</h4>
     <div class="container3">
     <input type="radio" id="brown" name="tag" value="brown">
     <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:brown; padding-left: 30px; padding-right: 30px; border:0;" for="brown" > &emsp;Brown </label> <br>
     <input type="radio" id="red" name="tag" value="red">
     <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:red; padding-left: 30px; padding-right: 30px; border:0;"for="brown"for="red"> &emsp;Red&emsp; </label> <br>
     <input type="radio" id="grey" name="tag" value="grey">
     <label style="font-size: 17px; height: 45px; color:#ffeded; background-color:grey; padding-left: 30px; padding-right: 30px; border:0;"for="brown"for="grey"> &emsp;Grey&emsp; </label> <br>
     <input type="radio" id="purple" name="tag" value="purple">
     <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:purple; padding-left: 30px; padding-right: 30px; border:0;"for="brown"for="purple"> &emsp;Purple </label><br><br>
     </div>
     <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0;" for="department">Select your Department:</label>
     <select style="border:1px solid #dedede; height:22px;" id="department" name="department" required>
       <option value="aerospace engineering">Aerospace Engineering</option>
       <option value="biotechnology">Biotechnology</option>
       <option value="chemical engineering">Chemical Engineering</option>
       <option value="civil engineering">Civil Engineering</option>
       <option value="computer science and engineering">Computer Science and Engineering</option>
       <option value="electrical engineering">Electrical Engineering</option>
       <option value="mechanical engineering">Mechanical Engineering</option>
       <option value="ocean engineering">Ocean Engineering</option>
     </select><br><br>
       <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0;" for="facname">Enter Faculty Name : </label>
       <input style="border:1px solid #dedede; height:22px;" type="text" size="40" name="facname" placeholder="Name..." required> <br><br>
       <label style="font-size: 18px; height: 45px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0;" for="teachervalue">Rate:</label>
       <input style="border:1px solid #dedede;" type="range" id="teachervalue" name="vol" min="0" max="5" required>
       <h4 style="font-size: 18px; height: 25px; color:#ffeded; background-color:#941212;padding-left: 30px; padding-right: 30px; border:0; border-bottom:2px solid #4d0d0d;">Comment Your Faculty:</h4>
       <div class="container3">
       <textarea style="border:1px solid #dedede;" name="message" rows="8" cols="50" placeholder="Type Here..." required></textarea>
       </div>
       <br><br>
       <input type="submit" class="button_1" name="submit_here" value="SUBMIT FORM">
       <input type="reset" class="button_1"><br><br>
     </form>


<?php
     if(isset($status))
     {
       echo"<h4>".$status."<h4>";
       unset($status);
     }
 ?>
<a class="button_1" style="text-decoration:none; height: 35px; background-color:#4d0d0d; font-size:20px;" href="http://localhost/project/HOME%20PAGE/frontend/project.php">HOME</a><br><br>
</div>
</div>
<section style="background-color:  #941212; color:#ffeded; text-align:center; padding:15px; margin-bottom:-10px;">
<p>Copyright  &copy  2021 <a style="color:#00a8b8; text-decoration:none;" href="http://localhost/project/HOME%20PAGE/frontend/project.php">CEG</a>. All  rights  reserved.</p>
</section>
</body>
</html>
