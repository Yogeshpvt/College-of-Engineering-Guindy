<?php

include('C:\xampp\htdocs\project\DATABASE\database_scripts.php');

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location:http://localhost/project/CLUBS_PAGE/frontend/clubs_login.php");
die;
