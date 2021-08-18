<?php
include('C:\xampp\htdocs\IT LAB MINI PROJECT\db.php');
?>
<?php
function getStudNamesOfSes($ses)
{
    global $DB_LINK;
    $QUERY = "SELECT * FROM " . "`" . TABLE::REG_DT . "`" . " WHERE Sprac_sess = '$ses'";
    $RESULT = mysqli_query($DB_LINK, $QUERY) or die('Error');
    $row = [];
    if ($RESULT and mysqli_num_rows($RESULT) > 0) {
        while ($val = mysqli_fetch_row($RESULT)) {
            array_push($row, $val[0]);
        }
    }
    return $row;
}
