

<?php
//Warning... close is not called
function runq($query)
{

mysql_connect("localhost", "root" , "");
mysql_select_db("code_checker");
$result = mysql_query($query);
return $result;

}

?>
