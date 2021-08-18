<?php
class SERVER
{
    const HOST = "localhost";
    const SER_USER = "root";
    const SER_PASS = "";
    const STU_DB = "database_yogesh(it 5211)";
}

class TABLE
{
    const REG_DT = "registerdetails";
    const SESS_DT = "session";
}
?>
<?php
session_start();
$DB_LINK = mysqli_connect(SERVER::HOST, SERVER::SER_USER, SERVER::SER_PASS, SERVER::STU_DB);
if (!$DB_LINK) {
    die('Error connecting to ' . SERVER::STU_DB . 'ERROR:' . mysqli_connect_error());
}
?>
