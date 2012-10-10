<?php

require_once 'databse.php';
$username=$_GET["q"];

$query = "SELECT * FROM user WHERE email='$username'";
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
