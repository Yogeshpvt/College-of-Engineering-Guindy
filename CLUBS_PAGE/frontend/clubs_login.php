<?php
  include('C:\xampp\htdocs\project\CLUBS_PAGE\backend\clubs_login.php');
?>
<!DOCTYPE html>
<html>
<head>
   <title>CEG | Clubs Login</title>
   <link rel="shortcut icon" href="AU_logo.ico">
   <meta charset ="UTF-8"/>
         <meta name ="keywords" content="html, css, js"/>
         <meta name ="author" content="YOGESH V, 2020115107" />
         <meta name ="robots" content="index,follow"/>
         <meta name ="language" content="EN_US"/>
         <meta name ="viewport" content="width=device-width,initial-scale=1.0">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
         <link rel="stylesheet" href="login.css">
</head>

   <body>

      <div class="container">
      <h1 class="label">Students Login</h1>
      <p>
         <?php

               echo($status);

         ?>
      </p>
      <form class="login_form" method="post" action="">

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



         <input style="background-color: #941212; font-size: 24px; font-weight: bold; color:#ffe6e6; width:99%; border-radius: 5px; border:2px solid #4d0d0d; height:54px; margin-top: 50px;" name="submit" type="submit" value="login">

         <a href="http://localhost/project/CLUBS_PAGE/frontend/clubs_signup.php">Signup</a>
      </form>
</div>
</body>
</html>
