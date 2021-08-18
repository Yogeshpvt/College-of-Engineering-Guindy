<?php
include('C:\xampp\htdocs\project\DATABASE\database_scripts.php');


if(isset($_POST['submit']))
{
   $question = $_POST['question'];

   $query = "INSERT INTO users (question) VALUES ('$question')";

    $val=mysqli_query($quesDB, $query);

        if($val)
       {
          echo '<script>alert("Your Response is Recorded")</script>';
        }
        else{
           echo '<script>alert("Your Response is not Recorded")</script>';
            }
}
