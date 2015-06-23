
<?php
//print the top part of the page.
function topPart() {?>
<!DOCTYPE html>
<html>
	<head>
		<title>EverNova</title>
		<meta charset="utf-8" />
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="https://webster.cs.washington.edu/images/nerdluv/heart.gif" type="image/gif" 
		rel="shortcut icon" />
		<link href="common.css" type="text/css" 
		rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" 
		type="text/javascript"></script>
		<script src="https://webster.cs.washington.edu/js/nerdluv/provided.js" 
		type="text/javascript"></script>
	</head>

	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-3 column">
	       			<div class="logo"><img src="images/logo.png"> </div>
				</div>
				<div class="col-md-9 column">
	       		<!--nav start-->
<!-- 					<div id='cssmenu'> -->
<!-- 						<ul> -->
<!-- 						   	<li><a href='index.html'><span>Home  </span></a></li> -->
<!-- 						    <li><a href='profile.html'><span>Profile</span></a></li> -->
<!-- 						    <li><a href='match.html'><span>Find match</span></a></li> -->
<!-- 						    <li><a href='shop.html'><span>Item shop</span></a></li> -->
<!-- 						    <li><a href='leader.html'><span> Leader board</span></a></li> -->
<!-- 						    <li><a href='#'><span>Login</span></a></li> -->
						   
<!-- 	   						<li class='active has-sub'><a href='#'><span>Signup</span></a> -->
<!-- 	      						<ul> -->
<!-- 	      	 						<li><a href='signup.php'><span>SIGN UP</span></a> </li> -->
	      	
<!-- 	         						<li ><a href='#'><span>FACEBOOK SIGN UP </span></a> </li> -->
	         
<!-- 	        						<li><a href='#'><span>GMAIL SIGN UP</span></a> </li> -->
<!-- 	      						</ul> -->
<!-- 	  	 					</li> -->
<!-- 						</ul> -->
<!-- 					</div> -->
				</div>
			</div>
		</div>
	
<?php
}


//print the bottom part of the page. 
function bottomPart() {?>
		<div>
			<p>
				This page is for you to sign up the new account for dota match. Type in your personal information. 
				Thank you for using our site.
			</p>
			
			<p>
				Copyright: Tanstandard 
			</p>
			
			<ul>
				<li>
					<a href="index.html">
						<img src="https://webster.cs.washington.edu/images/nerdluv/back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>
		</div>
	</body>
</html>

	
<!-- 	<div id="w3c"> -->
<!-- 		<a href="https://webster.cs.washington.edu/validate-html.php"><img  -->
<!-- 		src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML" /></a> -->
<!-- 		<a href="https://webster.cs.washington.edu/validate-css.php"><img  -->
<!-- 		src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a> -->
<!-- 	</div> -->
<?php
}
?>


<?php
//int the erro message when the name does not been passed as a parameter
function erro() {
	if ($_REQUEST["mailAddress"] == "") {?>
    <h1>Error! Invalid data.</h1>
    <div>
        <p>We're sorry. You submitted invalid user information. 
           Please go back and try again.
        </p>
    </div>
    <?php
	bottomPart();
	die();
    }
}
?>
