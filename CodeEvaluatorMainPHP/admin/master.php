

<?php

//Modify this according to the new website...
function header1($title)
{

    //Sesson details should be used here...
    //require_once 'databse.php';
    session_start();
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

		Default colour scheme is green. Uncomment prefered stylesheet to use it.

		<link rel="stylesheet" href="../resources/css/blue.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="../resources/css/red.css" type="text/css" media="screen" />

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
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="#" title="Sign Out">Sign Out</a>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->

				<li>
					<a href="http://www.google.com/" class="nav-top-item current"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Home
					</a>
				</li>
                <li>
					<a href="http://www.google.com/" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Profile
					</a>
				</li>

				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					Problem Sets
					</a>
					<ul>
						<li><a class="current" href="#">Solving</a></li>
						<li><a href="#">Solved</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a href="#">Not Attempted</a></li>
						<li><a href="#">Tests</a></li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item no-submenu">
						Submissions
					</a>

				</li>

				<li>
					<a href="#" class="nav-top-item no-submenu">
						LeaderBoard</a>
				</li>


				<li>
					<a href="#" class="nav-top-item">
						Settings
					</a>
					<ul>
						<li><a href="#">General</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Your Profile</a></li>
						<li><a href="#">Users and Permissions</a></li>
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
?>
