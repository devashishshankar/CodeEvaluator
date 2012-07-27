//Warning... close is not called

<?php

function runq($query)
{

mysql_connect("localhost", "root" , "");
mysql_select_db("db_tuble");
$result = mysql_query($query);
return $result;

}

?>
