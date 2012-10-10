<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<title>Code Checker | Register</title>

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

		<!-- Internet Explorer .png-fix -->

		<!--[if IE 6]>
			<script type="text/javascript" src="../resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
<script type="text/javascript">
    var ok = new Array(6);
  for(var i=0;i<6;i++)
      {
          ok[i]=1;
      }
    function check()
    {
        var uentry = document.getElementById('uentry');
        var pentry = document.getElementById('pentry');
        var p2entry = document.getElementById('p2entry');
        var eentry = document.getElementById('eentry');
        var rentry = document.getElementById('rentry');
        var pspan = document.getElementById('pspan');
        var p2span = document.getElementById('p2span');
        var uspan = document.getElementById('uspan');
        var espan = document.getElementById('espan');
        var rspan = document.getElementById('rspan');

        if(uentry.value=="" || pentry.value=="" || eentry.value=="" || rentry.value=="" || nentry.value=="" || ok[1]==0 || ok[4]==0 || ok[5]==0)
            {
                alert("Something is wrong");
                uspan.style.visibility="visible";
                pspan.style.visibility="visible";
                p2span.style.visibility="visible";
                espan.style.visibility="visible";
                rspan.style.visibility="visible";
                nspan.style.visibility="visible";
                return false;
            }
            if(pentry.value!=p2entry.value)
             {
                   alert("Passwords don't match");
                   return false;

             }


    }
    function checkuser(str,val)
            {
            var object1= new XMLHttpRequest();
            if(val==1)
                {
            var s = document.getElementById("unot");
            var state="Username";
            var to = "checkuser.php?q=";
                }
         
           else if(val==4)
                {
            var s = document.getElementById("enot");
            var state="Email";
            var to = "checkemail.php?q=";
                }
           else if(val==5)
                {
            var s = document.getElementById("rnot");
            var state="Registration no.";
            var to = "checkregno.php?q=";
                }
             

            object1.onreadystatechange= function()
            {


              if (object1.readyState==4 && object1.status==200)
                {


                       if((object1.responseText.trim())=="1")
                       {
                           s.innerHTML='<div title="Sorry '+state+' already exists" style="background-image: url(\'../resources/images/icons/cross_circle.png\'); background-repeat: no-repeat; height: 27px ; width: 16px ;"></div>'

                           
                           ok[val]=0;
                       }
                   else
                       {
                           s.innerHTML='<div title=" '+state+' available!" style="background-image: url(\'../resources/images/icons/tick_circle.png\'); background-repeat: no-repeat; height: 27px ; width: 16px ;"></div>'

                            ok[val]=1;
                       }



                 }
            }
            object1.open("GET", to+str,true);

            object1.send();
            }
    
</script>

	</head>

	<body id="login">

		<div id="login-wrapper" class="png_bg">
			<div id="login-top">

				<h1>Code Checker</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="../resources/images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
                        
			<div id="login-content">

				<form name="login" method="post" action="register_auth.php" onsubmit="return check()">

                                    
                                    Already have an account? <a href="login.php">Log in!</a><br /><br />
                                            <br />
                                            <h2 style="color: #ffffff">Register</h2>
                                            <br />
                                            <table>
                                                 <tr>
                                                    <td>
					<p>
						<label>Name</label>
                                                <input class="text-input" id="nentry" type="text" name="name" onkeyup="" />
                                                <span id="nspan" title="Name is required." style="visibility:hidden;">*</span>
					</p>
                                                    </td>
                                                    <td>
                                                        <div id="nnot" style="height: 27px ; width: 16px ;"></div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
					<p>
						<label>Username</label>
                                                <input class="text-input" id="uentry" type="text" name="username" onkeyup="checkuser(this.value,1)" />
                                                <span id="uspan" title="User Name is required." style="visibility:hidden;">*</span>
					</p>
                                                    </td>
                                                    <td>
                                                        <div id="unot" style="height: 27px ; width: 16px ;"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
					<p>
						<label>Password</label>
						<input class="text-input" id="pentry" type="password" name="password" />
                                                <span id="pspan" title="Password is required." style="visibility:hidden;">*</span>
					</p>
                                                    </td>
                                                      <td>

                                                        <div id="pnot" style="height: 27px ; width: 16px ;"></div></td>

                                                </tr>
                                                <tr>
                                                    <td>

					<p>
						<label>Confirm Password</label>
						<input class="text-input" id="p2entry" type="password" name="cpassword" />
                                                <span id="p2span" title="Password is required." style="visibility:hidden;">*</span>
					</p>
                                                    </td>
                                                    <td>

                                                        <div id="p2not" style="height: 47px ; width: 16px ;"></div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>

					<p>
						<label>Email</label>
						<input class="text-input" id="eentry" type="text" name="email" onkeyup="checkuser(this.value,4)"/>
                                                <span id="espan" title="Email is required." style="visibility:hidden;">*</span>
					</p>
                                                    </td>
                                                    <td>

                                                        <div id="enot" style="height: 27px ; width: 16px ;"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                        <p>
						<label>Reg. No.</label>
						<input class="text-input" id="rentry" type="text" name="reg_no" onkeyup="checkuser(this.value,5)"/>
                                                <span id="rspan" title="Reg. No. is required." style="visibility:hidden;">*</span>
					</p>
                                                    </td>
                                                   <td>

                                                        <div id="rnot" style="height: 27px ; width: 16px ;"></div>
                                                   </td>
                                                 </tr>
                                                <tr>
                                                    <td>


					<p>
						<input class="button" type="submit" value="Register" />
					
                                        </p>

                                                    </td>
                                                </tr>
                                            </table>
                                            


				</form>
			</div> <!-- End #login-content -->

		</div> <!-- End #login-wrapper -->

  </body>
  </html>
