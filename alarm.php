<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
?>
    <!DOCTYPE HTML>
    <!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
    <html>

    <head>
        <title>SmartHome Alarm | SmartHome</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/alarm-style.css" />
        <link rel="stylesheet" href="css/image-style.css" />
		<link rel="stylesheet" href="css/lock.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
        <script src="https://use.fontawesome.com/a7239398f1.js"></script>
        <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    </head>

    <body class="index">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <img src="images/small-logo-dark.png" class="small-logo">
                <h1 class="dark" id="logo"><a href="home.php">SmartHome <span>| Living it Well</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current dark"><a href="home.php">Home</a></li>
                        <li class="submenu dark">
                            <a href="#">Menu</a>
                            <ul>
                                <li><a href="http://www.alejandronepro.com/smarthome/settings.php">Settings</a></li>
                                <li class="submenu">
                                    <a href="#">Devices</a>
                                    <ul>
                                        <li><a href="http://www.alejandronepro.com/smarthome/cameras.php">Cameras</a></li>
                                        <li><a href="http://www.alejandronepro.com/smarthome/lights.php">Lights</a></li>
                                        <li><a href="http://www.alejandronepro.com/smarthome/alarm.php">Alarm</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="logout.php?logout" class="button special">LOG OFF</a></li>
                    </ul>
                </nav>
            </header>

            <!-- Banner -->
			 <section id="banner">


            <!-- Two -->	
             <div class="parent">
				<div class="child">
					<h1>SmartHome Alarm</h1>
						<section>
							<div class="wrapper1">
			
							<div class="base">
									
							<div class="base-bottom">
									
							</div>
									
							<div class="lock-inside-top">
									
							</div>
									
							<div class="lock-inside-bottom">
									
							</div>
								</div>
								
							<div class="lock-cirlce">
									
							<div class="lock-circle-inside">
									
							</div>
								
							</div>
								
							<div class="lock-box">
								
							</div>

							</div>
						</section>
				
						<section class="wrapper style1 container special">
							<div class="row">
								
								<div class="4u 12u(narrower) armbox">
									<button id="lock" onclick="myFunction1()">
										<section class="arm">
											<span class="icon featured fa-lock"></span>
												<header>
													<h3><!--[-->ARM (AWAY)<!--]--></h3>
												</header>
											
										</section>
									</button>
								</div>
								
								
								<div class="4u 12u(narrower) armbox">
									<button id="stay" onclick="myFunction()">
										<section class="arm">
											<span class="icon featured fa-lock"></span>
												<header>
													<h3><!--[--->ARM (STAY)<!---]--></h3>
												</header>
											
										</section>
									</button>
								</div>
								
								<div class="4u 12u(narrower) armbox">
									<button id="unlock" onclick="myFunction2()"> 
										<section class="arm">
											<span class="icon featured fa-unlock"></span>
												<header>
													<h3><!--[---->  DISARM  <!----]--></h3>
												</header>
											
										</section>
									</button>	
								</div>
							</div>
						</section>
					
				</div>
			</div>
			</section>

            

            <!-- Footer -->
            <footer id="footer">

                <ul class="icons">
						<li><a href="https://twitter.com/" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://plus.google.com/collections/featured" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
						<li><a href="https://github.com/" class="icon circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="https://dribbble.com/" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
				</ul>

                <ul class="copyright">
                    <li>&copy; SmartHome 2017</li>
                </ul>

            </footer>

        </div>

        <!-- Scripts -->
        <!--        <script src="js/jquery.min.js"></script>-->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="js/jquery.scrollgress.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/util.js"></script>
        <!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
        <script src="js/main.js"></script>
        <script src="js/image.js"></script>
        <script src="js/video.js"></script>
		<script>
		function myFunction(){ 
			if(document.getElementById){
			document.getElementById("stay").style.color="orange";
			document.getElementById("lock").disabled=true;
			document.getElementById("lock").style.color="grey";
			document.getElementById("unlock").style.color="grey";
			alert("Sensors:\n Interior: NO  :  Exterior: YES\nTime Delay:\n Entry: NO  :  Exit: YES")
			}
		}
		</script>
		<script>
		function myFunction1(){
			if(document.getElementById){
			document.getElementById("lock").style.color="green";
			document.getElementById("unlock").style.color="grey";
			document.getElementById("stay").disabled=true;
			document.getElementById("stay").style.color="grey";
			alert("Sensors:\n Interior: YES  :  Exterior: YES\nTime Delay:\n Entry: YES  :  Exit: YES")
			}
		}
		</script> 
		<script>
		function myFunction2(){
			if(document.getElementById){
			document.getElementById("unlock").style.color="red";
			document.getElementById("lock").disabled=false;
			document.getElementById("stay").disabled=false;
			document.getElementById("stay").style.color="grey";
			document.getElementById("lock").style.color="grey";
			alert("Sensors:\n Interior: YES  :  Exterior: YES");
			}
			
		}
		</script>

    </body>

    </html>
    <?php ob_end_flush(); ?>


<!--
Copyright (c) 2017 by Matthew Moran (http://codepen.io/matthewjmoran/pen/dXdYbN)


Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
-->
