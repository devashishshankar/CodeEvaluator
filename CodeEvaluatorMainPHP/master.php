

<?php

//Modify this according to the new website...
function header1($title)
{
    require_once 'databse.php';
    session_start();
   $h1 = '
<html>
    <head>
        <title> ';

    $h2='
        </title><link href="./Site.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="page">
            <div class="header" style="background-color: #FBF28C; color: #003366; top: 0px; left: 4px; width: 99%;">
                <div class="loginDisplay" style="background-color: #FBF28C; width: 929px;">
                    <img alt="..." src="./Images/mynewlogo.png" align="left" style="height:76px;width:212px;" />  ';
    $h3='

                    [ <a href="Login.php" style="color: #465C71">Log In</a> ] ';
    $h4='

                </div>
                <div class="clear hideSkiplink"  style="border-color: #3366CC; background-color: #FFFFFF; height: 34px; width: 100%; margin-bottom: 0px;">

                    <div class="menu" id="NavigationMenu" style="float: left; ">
                        <ul class="level1 "  style="position: relative; width: auto; float: left; " >
                            <li style="position: relative; float: left; "><a class="level1 " href="Home.php" >Home</a>
                            </li>
                            <li style="position: relative; float: left; "><a class="level1 " href="profile.php" >Profile</a></li>
                            <li style="position: relative; float: left; "><a class="level1 " href="allgroups.php" >Group</a></li>
                            <li style="position: relative; float: left; "><a class="level1 " href="images.php" >Images</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="main">
';

    if(isset ($_SESSION['uid']))
    {
        $uid=$_SESSION['uid'];
        $query="SELECT username from login_master where uid = $uid";
        $result = runq($query);
        if($d = mysql_fetch_array($result))
        {
            $uname = $d['username'];
            $h3 = " Welocme $uname!".'[ <a href="Logout.php" style="color: #465C71">Log Out</a> ] ';
        }
    }
   echo $h1.$title.$h2.$h3.$h4;
   if(isset ($uid))
   return $uid;
   else
       return false;

}


function footer()
{
    $f='  </div>
        </div>

        <div class="footer">

            <a href=".About.php" style="font-weight: 700">About Us</a>


            <a style="font-weight: 700">Privacy</a>


            <a style="font-weight: 700">Terms</a>


            <a style="font-weight: 700">Help</a>

        </div>

    </body>
</html>
';
    echo $f;
}
?>
