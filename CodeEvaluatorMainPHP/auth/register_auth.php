<?php
require_once '../databse.php';
session_start();

$uname = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$reg_no = $_POST['reg_no'];
$name = $_POST['name'];

$query = "INSERT INTO login VALUES('$uname','$pass','')";
$query2 = "SELECT uid FROM login WHERE username = '$uname'";

$result = runq($query);
//print $query;
//print $query2;
$result2 = runq($query2);
if($row = mysql_fetch_array($result2))
{

    $_SESSION['uid']=$row['uid'];
    $_SESSION['uname']=$uname;
    $uid = $row['uid'];
    $query = "INSERT INTO user(uid,name,reg_no,email) VALUES('$uid','$name','$reg_no','$email')";

    $result = runq($query);
    header('Location: ../user/index.php');
}


?>
