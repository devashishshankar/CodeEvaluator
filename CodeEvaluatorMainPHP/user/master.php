

<?php
require_once '../databse.php';
//Modify this according to the new website...
function header1($title)
{

    //Sesson details should be used here...
    session_start();
    if(!isset ($_SESSION['uid'])|| !isset($_SESSION['uname']))
    {
        header('Location: ../auth/login.php?r=You+must+login+to+view+the+page');
        return false;
    }

    $uid = $_SESSION['uid'];

    $uname = $_SESSION['uname'];

   $h1 = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>'.$title.'</title>

		<!--                       CSS                       -->

		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="../resources/css/reset.css" type="text/css" media="screen" />

		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="../resources/css/style.css" type="text/css" media="screen" />

		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="../resources/css/invalid.css" type="text/css" media="screen" />

		<!-- Colour Schemes

		Default colour scheme is green. Uncomment prefered stylesheet to use it. -->

		<link rel="stylesheet" href="../resources/css/blue.css" type="text/css" media="screen" />

		<!-- <link rel="stylesheet" href="../resources/css/red.css" type="text/css" media="screen" />

		-->

		<!-- Internet Explorer Fixes Stylesheet -->

		<!--[if lte IE 7]>
			<link rel="stylesheet" href="../resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->

		<!--                       Javascripts                       -->

		<!-- jQuery -->
		<script type="text/javascript" src="../resources/scripts/jquery-1.3.2.min.js"></script>

		<!-- jQuery Configuration -->
		<script type="text/javascript" src="../resources/scripts/simpla.jquery.configuration.js"></script>

		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="../resources/scripts/facebox.js"></script>

		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="../resources/scripts/jquery.wysiwyg.js"></script>

		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="../resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="../resources/scripts/jquery.date.js"></script>
		<!--[if IE]><script type="text/javascript" src="../resources/scripts/jquery.bgiframe.js"></script><![endif]-->


		<!-- Internet Explorer .png-fix -->

		<!--[if IE 6]>
			<script type="text/javascript" src="../resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix(\'.png_bg, img, li\');
			</script>
		<![endif]-->

	</head>

	<body>
	<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="../resources/images/logo.png" alt="Simpla Admin logo" /></a>

			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">'.$uname.'</a>, <br />
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="../auth/logout.php" title="Log Out">Sign Out</a>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->

				<li>
					<a href="index.php" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Home
					</a>
				</li>
                <li>
					<a href="profile.php" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Profile
					</a>
				</li>

				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					Problem Sets
					</a>
					<ul>
						<li><a href="problemset.php">All</a></li>
						<li><a href="problemset.php">Solving</a></li>
						<li><a href="#">Solved</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="#">Not Attempted</a></li>
						<li><a href="#">Tests</a></li>
					</ul>
				</li>

				<li>
					<a href="view_submissions.php" class="nav-top-item no-submenu">
						Submissions
					</a>

				</li>

				<li>
					<a href="#" class="nav-top-item no-submenu">
						LeaderBoard</a>
				</li>


				<li>
					<a href="#" class="nav-top-item">
						Help
					</a>
					<ul>
						<li><a href="#">Getting Started</a></li>
						<li><a href="#">General Information</a></li>
						<li><a href="#">FAQs</a></li>
						<li><a href="#">About</a></li>
					</ul>
				</li>

			</ul> <!-- End #main-nav -->


		</div></div> <!-- End #sidebar -->

		<div id="main-content"> <!-- Main Content Section with everything -->

			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
';


echo $h1;
}


function footer()
{
    $f='
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						Copyright 2012 Devashish Shankar, Nitin Surya, Akshat Verma
                                </small>
			</div><!-- End #footer -->

		</div> <!-- End #main-content -->

	</div></body>


<!-- Download From www.exet.tk-->
</html>

';
    echo $f;
}

function PSViewer($heading,$query='',$notif='')
{
    $row = runq($query);
    if(mysql_affected_rows ()<=0)
        $noDisplay=true;
   $c1 = '
  			<div class="content-box"><!-- Start Content Box -->

				<div class="content-box-header">

					<h3>'.$heading.'</h3>

			<!--		<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div
						<li><a href="#tab2">Forms</a></li>
					</ul> -->

					<div class="clear"></div>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this divs tab -->

						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="../resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								'.$notif.'</div>
						</div>';
   if($noDisplay)
   {
       $c1.='No Problem Set found';
   }
   else
   {
       $c1.='<table>

							<thead>
								<tr>
								   <th>Problem Set</th>
								   <th>Problems</th>
								   <th>Solved</th>
								   <th>Completion %</th>
								   <th>Difficulty</th>
								</tr>

							</thead>



							<tbody>';
   while($data= mysql_fetch_array($row))
   {
       $psid = $data['psid'];
       $r2 = runq("SELECT * FROM problemset WHERE psid=$psid");
       $r3 = runq("SELECT COUNT(*) FROM problem WHERE psid=$psid");
       $r4 = runq("SELECT COUNT(*) FROM user_problem,problem WHERE uid = $uid AND user_problem.pid=problem.pid AND psid = '$psid' AND user_problem.status=2");
       $c1.=
   '

						
								<tr>
b									<td><a href="problemset.php?psid='.$psid.'" title="'.$r2['psname'].'">'.$r2['psname'].'</a></td>
									<td>'.$r3[0].'</td>
									<td>'.$r4[0].'</td>
									<td>63%</td>
									<td>
										'.$r2[0].'
									</td>
								</tr> ';
   }
   $c1.='
                                                         

							</tbody>

						</table>';
   }

   $c1.='


					</div> <!-- End #tab1 -->

					 <!-- End #tab2 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->

';
   
   

   echo $c1;

}

function TSViewer($heading,$query='',$notif='')
{
  $c1 = '<div class="content-box"><!-- Start Content Box -->

				<div class="content-box-header">

					<h3>'.$heading.'</h3>

			<!--		<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div
						<li><a href="#tab2">Forms</a></li>
					</ul> -->

					<div class="clear"></div>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1">

						<div class="notification attention png_bg">
							<a href="#" class="close"><img src="../resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								'.$notif.'
							</div>
						</div>

						<table>

							<thead>
								<tr>
								   <th>Test Name</th>
								   <th>Compeleted On</th>
								   <th>Score</th>
                                                                   <th> Rank </th>
								</tr>

							</thead>



							<tbody>
								<tr>
									<td><a href="problemset.php" title="title">CSE307 Cycle Sheet 1</a></td>
									<td>30th July 2011</td>
									<td>60%</td>
                                                                        <td>10</td>

								</tr>




							</tbody>

						</table>


					</div> <!-- End #tab1 -->

					 <!-- End #tab2 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->
';


   echo $c1;
}

function SubViewer($heading,$query='',$notif='')
{
  $c1 = '<div class="content-box"><!-- Start Content Box -->

				<div class="content-box-header">

					<h3>'.$heading.'</h3>

			<!--		<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div
						<li><a href="#tab2">Forms</a></li>
					</ul> -->

					<div class="clear"></div>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1">

						<p>
								'.$notif.'
							</p>
						

						<table>

							<thead>
								<tr>
                                                                   <th>Submission ID</th>
								   <th>Problem</th>
								   <th>Date</th>
								   <th>Time</th>
                                                                   <th>Status</th>
                                                                   <th>Test Cases Passes </th>
                                                                   <th>Total Running Time (ms) </th>
								</tr>

							</thead>



							<tbody>
								<tr>
                                                                        <td><a href="submission.php"> JJ10345 </a> </td>
									<td><a href="problem.php" title="title">Jolly Jumpers</a></td>
									<td>25th August</td>
									<td>06:30:03</td>
                                                                        <td>Partially Correct</td>
                                                                        <td>8/15</td>
                                                                        <th>87.8 </th>

								</tr>

                                                                <tr>
                                                                        <td> <a href="submission.php"> JJ10365 </a>  </td>
									<td><a href="problem.php" title="title">Jolly Jumpers</a></td>
									<td>25th August</td>
									<td>06:40:08</td>
                                                                        <td>Wrong Answer</td>
                                                                        <td>0/15</td>
                                                                        <th>102.4 </th>

								</tr>
                                                                <tr>
                                                                        <td> <a href="submission.php"> JJ10375 </a>  </td>
									<td><a href="problem.php" title="title">Jolly Jumpers</a></td>
									<td>25th August</td>
									<td>07:20:33</td>
                                                                        <td>Correct Answer</td>
                                                                        <td>15/15</td>
                                                                        <th>44.6 </th>

								</tr>




							</tbody>

						</table>


					</div> <!-- End #tab1 -->

					 <!-- End #tab2 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->

';


   echo $c1;
}

function PViewer($heading,$query='',$notif='')
{
  $c1 = '<div class="content-box"><!-- Start Content Box -->

				<div class="content-box-header">

					<h3>'.$heading.'</h3>

			<!--		<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div
						<li><a href="#tab2">Forms</a></li>
					</ul> -->

					<div class="clear"></div>

				</div> <!-- End .content-box-header -->

				<div class="content-box-content">

					<div class="tab-content default-tab" id="tab1">

						<p>
								'.$notif.'
							</p>


						<table>

							<thead>
								<tr>
                                                                   <th>#</th>
								   <th>Problem</th>
								   <th>Difficulty</th>
								   <th>Status</th>
                                                                   <th>Stats</th>
								</tr>

							</thead>



							<tbody>
								<tr>
                                                                        <td> 1. </td>
									<td><a href="problem.php" title="title">Jolly Jumpers</a></td>
									<td>Easy</td>
									<td>Correct Answer</td>
                                                                        <td>200/250</td>

								</tr>

                                                                <tr>
                                                                        <td> 2. </td>
									<td><a href="problem.php" title="title">K Difference</a></td>
									<td>Hard</td>
									<td>Partially Correct</td>
                                                                        <td>40/120</td>

								</tr>
                                                                <tr>
                                                                        <td> 3. </td>
									<td><a href="problem.php" title="title">Equations</a></td>
									<td>Hard</td>
									<td>Wrong Answer</td>
                                                                        <td>40/120</td>

								</tr>




							</tbody>

						</table>


					</div> <!-- End #tab1 -->

					 <!-- End #tab2 -->

				</div> <!-- End .content-box-content -->

			</div> <!-- End .content-box -->

';


   echo $c1;
}
?>
