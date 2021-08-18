<?php
   include('C:\xampp\htdocs\project\DATABASE\database_scripts.php');
  $status = "";
  $flag = 0;
  if(isset($_POST['submit']))
  {
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];

      if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
      {
        
         $query = "select * from users where user_name = '$user_name' limit 1";
         $result = mysqli_query($accountDB, $query);

         if($result)
         {

            if($result && mysqli_num_rows($result) > 0)
            {

               $user_data = mysqli_fetch_assoc($result);

               if($user_data['password'] === $password)
               {
                 $flag = 1;
                  $_SESSION['user_id'] = $user_data['user_id'];
                  header("Location: http://localhost/project/CLUBS_PAGE/frontend/clubs_index.php");

               }

            }
         }
      }
      if($flag == 0){
        $status = "&nbsp &nbsp &nbsp &nbsp Invalid Username or Password";
      }
   }
  ?>
<?php
