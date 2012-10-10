<?php

require_once '../databse.php';
$username=$_GET["q"];
if($username=="")
{
    echo "1";
    return;
}
$query = "SELECT * FROM login WHERE username='$username'";
$result = runq($query);
if(mysql_fetch_array($result))
{
    echo "1";
}
else
{
   echo "0";
}
?>
