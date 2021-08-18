<?php
include('C:\xampp\htdocs\IT LAB MINI PROJECT\db.php');
?>
<?php
$response = 0;
if (isset($_POST['submit'])) {
    $Sregnum =  trim($_POST['regnum']);
    $Semail =  trim($_POST['email']);
    if (!isEmailPresent($Semail) and !isRegNumPresent($Sregnum)) {

        $Sname = trim($_POST['name']);
        $Sprac_sess = $_POST["prac_sess"];
        if (addRecord($Sname, $Semail, $Sregnum, $Sprac_sess)) {
            if (decreaseSeatCount($Sprac_sess)) {
                $response = array(
                    "message" => "Successfully registered",
                    "code" => 1,
                    "status" => "success"
                );
            } else {
                $response = array(
                    "message" => "Error decreasing",
                    "code" => 0,
                    "status" => "failure"
                );
            }
        } else {
            $response = array(
                "message" => "Could not add record",
                "code" => 0,
                "status" => "failure"
            );
        }
    } else {

        $response = array(
            "message" => "Already registered email or register number",
            "code" => 0,
            "status" => "failure"
        );
    }
}
?>
<?php
function decreaseSeatCount($ses)
{
    global $DB_LINK;
    $QUERY = "SELECT `Session_seats` FROM " . "`" . TABLE::SESS_DT . "`" . " WHERE Session_id = '$ses' LIMIT 1";
    $RESULT = mysqli_query($DB_LINK, $QUERY) or die('Error');
    if ($RESULT and mysqli_num_rows($RESULT) > 0) {
        $row = mysqli_fetch_assoc($RESULT);
        $cur = intval($row['Session_seats']) - 1;
    }
    $QUERY = "UPDATE" . "`" . TABLE::SESS_DT . "`" . "SET `Session_seats` = '$cur' WHERE `Session_id` = $ses;";
    $RESULT = mysqli_query($DB_LINK, $QUERY) or die('Error');
    return true;
}
function getSeatCount()
{
    global $DB_LINK;
    $QUERY = "SELECT `Session_seats` FROM " . "`" . TABLE::SESS_DT . "`";
    $row = [];
    $RESULT = mysqli_query($DB_LINK, $QUERY) or die('Error');
    if ($RESULT and mysqli_num_rows($RESULT) > 0) {
        while ($val = mysqli_fetch_row($RESULT)) {
            array_push($row, $val[0]);
        }
    }
    return $row;
}
function isEmailPresent($email)
{
    global $DB_LINK;
    $FLAG = false;
    $QUERY = "SELECT * FROM " . "`" . TABLE::REG_DT . "`" . " WHERE Semail = '$email' LIMIT 1";
    $RESULT = mysqli_query($DB_LINK, $QUERY) or die('Error');
    if ($RESULT and mysqli_num_rows($RESULT) > 0) {
        $FLAG = true;
    }
    return $FLAG;
}
function isRegNumPresent($num)
{
    global $DB_LINK;
    $FLAG = false;
    $QUERY = "SELECT * FROM " . "`" . TABLE::REG_DT . "`" . " WHERE Sregisterno = '$num' LIMIT 1";
    $RESULT = mysqli_query($DB_LINK, $QUERY) or die('Error');
    if ($RESULT and mysqli_num_rows($RESULT) > 0) {
        $FLAG = true;
    }
    return $FLAG;
}
function addRecord($name, $email, $id, $ses)
{
    global $DB_LINK;
    $status = 0;
    $QUERY = "INSERT INTO " . "`" . TABLE::REG_DT . "`" . " (Sname,Semail,Sregisterno,Sprac_sess) VALUES('$name','$email','$id','$ses')";
    $status += intval(mysqli_query($DB_LINK, $QUERY));
    return $status;
}
?>
