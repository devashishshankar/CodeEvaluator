<?php
require_once 'master.php';
require_once '../databse.php';
header1('Home');

$uid = $_SESSION['uid'];
$row=runq("SELECT name FROM user WHERE uid = '$uid'");
if($data=  mysql_fetch_array($row))
$name = $data['name'];
?>

<br>

<h2>Welcome
<?php
echo $name;
?>
,
</h2>
			<p id="page-intro">
                        Start Solving Problems now!</p>

			<div class="clear"></div> <!-- End .clear -->

			<?php
                        PSViewer('Currently Solving', "SELECT psid FROM user_pset WHERE uid = '$uid' AND status='1'", 'These are the Problem Sets you are currently solving');
                        ?>


			<div class="clear"></div>

                <?php
                        TSViewer('Available Tests', '', 'These are the tests you can take currently');
                        ?>

			<div class="clear"></div>

                   <?php
                        PSViewer('Solved Problem Sets', '', 'These are the Problem Sets that you have compeleted or are not currently solving');
                        ?>

			<div class="clear"></div>

                         <?php
                        TSViewer('Solved Tests', '', 'These are the tests that you have solved');
                        ?>
<?php
footer();
?>