<?php
include('C:\xampp\htdocs\project\DATABASE\database_scripts.php');

if(isset($_POST['submit_here']))
{
  $name = $_POST['name'];
  $date = $_POST['date'];
  $tag = $_POST['tag'];
  $department = $_POST['department'];
  $facname = $_POST['facname'];
  $vol = $_POST['vol'];
  $message = $_POST['message'];
  $query = "INSERT INTO user (name,date,tag,department,facname,vol,message) VALUES ('$name','$date','$tag','$department','$facname','$vol','$message')";
  $result = mysqli_query($feedbackDB, $query);

    if($result)
   {
      $status = "Form submitted successfully";

  }
    else{
     $status = "Sorry failed to insert";

    }
 }
