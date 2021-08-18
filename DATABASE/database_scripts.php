<?php
$feedbackDB= mysqli_connect("localhost","root","","feedback database");
$accountDB = mysqli_connect("localhost","root","","account database");
$quesDB = mysqli_connect("localhost","root","","question database");
if (!$feedbackDB) {
    die('Error connecting to ' . "teacherform". 'ERROR:' . mysqli_connect_error());
}
session_start();
?>
<?php
if(!$quesDB){
  die('ERROR'.mysqli_connect_error());
}
 ?>

<?php
//LOGIN FUNCTIONS
function check_login()
{

  global $accountDB;
	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($accountDB,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: http://localhost/project/CLUBS_PAGE/frontend//clubs_login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) {
		# code...

		$text .= rand(0,9);
	}

	return $text;
}?>
