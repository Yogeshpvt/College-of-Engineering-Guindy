<?php
   include('C:\xampp\htdocs\project\DATABASE\database_scripts.php');
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {

         $user_id = random_num(20);
         $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

         mysqli_query($accountDB, $query);

         header("Location: http://localhost/project/CLUBS_PAGE/frontend/clubs_login.php");
         die;
      }else
      {
         echo "Please enter some valid information!";
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
   <title>CEG | Clubs Signup</title>
   <link rel="shortcut icon" href="AU_logo.ico">
   <meta charset ="UTF-8"/>
         <meta name ="keywords" content="html, css, js"/>
         <meta name ="author" content="YOGESH V, 2020115107" />
         <meta name ="robots" content="index,follow"/>
         <meta name ="language" content="EN_US"/>
         <meta name ="viewport" content="width=device-width,initial-scale=1.0">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<style>
  *{
   padding: 0;
   margin: 0;
}
body{
   background: url(CEGnight.jpg) no-repeat;
   background-size: cover;
   align-items: center;
   justify-content: center;
   display: flex;
   font-family: sans-serif;
}
.container{
   position: relative;
   margin-top: 100px;
   width: 450px;
   height: 460px;
   background:#ffe6e6;
}
.label{
   padding: 20px 125px;
   font-size: 27px;
   font-weight: bold;
   color: #ffeded;
   background-color:#4d0d0d;
   border-bottom: 4px solid #941212;
}
.login_form{
   padding: 20px 40px;
}
.login_form .font{
   font-size: 18px;
   color: #4d0d0d;
   margin: 3px 0;
}
.login_form input{
   height: 40px;
   width: 350px;
   padding: 0 5px;
   font-size: 18px;
   outline: none;
   border: 1px solid #dedede ;
}
.login_form .font2{
   margin-top: 30px;
}
.login_form button{
   margin: 45px 0 30px 0;
   height: 57px;
   width: 365px;
   font-size: 22px;
   color: white;
   outline: none;
   cursor: pointer;
   font-weight: bold;
   background: #4d0d0d;
   border-radius: 3px;
   border: 2px solid #941212;
   transition: .5s;
}
.login_form button:hover{
   background: #941212;
}
.cont i {
    margin-left: -30px;
    cursor: pointer;
}
.container a{
  height: 10%;
  width: 81.5%;
  position: absolute;
  left: 38.5px;
  bottom: 18px;
  background:#4d0d0d;
  border-radius: 5px;
  text-decoration: none;
  text-align: center;
  color: white;
  border: 2px solid #941212;
  font-size: 22px;
  font-weight: bold;
  transition: .5s;
  outline: none;
  cursor: pointer;
  margin-top: -20px;
}
.container a:hover{
   background:#941212;

   </style>
    <body>

      <div class="container">
      <h1 class="label">Student Signup</h1>
      <form class="login_form" method="post">

         <div class="font">Username</div>
         <input autocomplete="off" id="text" type="text" name="user_name" required>
         <div class="cont">
         <div class="font font2">Password</div>
         <input id="password" type="password" name="password" required>
         <i class="bi bi-eye-slash" id="togglePassword"></i>
         </d iv>
         <script>
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('bi-eye');
});
         </script>

         <button type="submit">Signup</button>

         <a href="http://localhost/project/CLUBS_PAGE/frontend/clubs_login.php">Login</a>
      </form>
</div>
</body>
</html>
