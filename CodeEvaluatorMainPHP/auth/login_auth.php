<?php
if(isset ($_POST['username']))
{
session_start();
require_once '../databse.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT password,uid FROM login WHERE username='$username'";
echo $query;
$result = runq($query);

if($row = mysql_fetch_array($result))
{
    if($row['password']!=$password)
    {
       header('Location: login.php?r=Wrong+Password');
    }
    $_SESSION['uid']=$row['uid'];
    $_SESSION['uname']=$username;
    header('Location: ../user/index.php');
}
else
{
    header('Location: login.php?r=Username+doesnt+exist');
}
}
?>
