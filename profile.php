<?php 
session_start();

if(isset($_SESSION["mailAddress"])){
	currentUser();
	
} else {
	login();
	
}


function currentUser() {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>:: NOVA ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    
     <!-- Load Responsive Menu -->
<link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
 <!-- Load Responsive Menu end -->

 <link rel="shortcut icon" href="images/favicon.ico">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    
    
    <!-- SLIDER_PART -->

<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/responsiveslides.css">
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

     
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 800,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script> 
  
<!-- SLIDER_PART END -->

<!--body slider start-->
<script src="js/jquery-1.9.1.min2a.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <!--body slider end-->
  
  
</head>

<body>
<div class="main topbg">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-3 column">
       <div class="logo"><img src="images/logo.png"> </div>
		</div>
		<div class="col-md-9 column">
       <!--nav start-->
<div id='cssmenu'>
<ul>
    <li><a href='index.html'><span>Home  </span></a></li>
    <li><a href='profile.html'><span>Profile</span></a></li>
     <li><a href='match.html'><span>Find match</span></a></li>
      <li><a href='shop.html'><span>Item shop</span></a></li>
       <li><a href='leader.html'><span> Leader board</span></a></li>
        <li><a href='logout.php'><span>Logout</span></a></li>
   
   <li class='active has-sub'><a href='#'><span>Signup</span></a>
      <ul>
         <li ><a href='#'><span>FACEBOOK SIGN UP </span></a>
           
         </li>
         <li><a href='#'><span>GMAIL SIGN UP</span></a> </li>
          <li><a href='#'><span>FORGOT PASSWORD</span></a> </li>
      </ul>
   </li>
  
</ul>
</div>
<div class="spacer1"> </div>
<!--nav end-->
		</div>
       
	</div>
    </div> </div>
    
    
     <!--SLIDER_PART-->
    <div class="main"> 
<div class="slider-section">

  <div class="banner">
	<div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li>
          <img src="images/m-slide-bg-1.jpg" alt="">  
			<div class="paragraph">
				<P>Brand New Match Making System with Cash Prize for Every Player</p>
				<a href="#" class="bannerbtn">START FOR FREE NOW</a>
			</div>		  
        </li>
        <li>
          <img src="images/m-slide-bg-2.jpg" alt="">
			<div class="paragraph">
				<P>Brand New Match Making System with Cash Prize for Every Player</p>
				<a href="#" class="bannerbtn">START FOR FREE NOW</a>
			</div>	
        </li>
        
      </ul>
       
    </div>
    <div class="clear"></div>
   
</div>
</div>
    </div>
    <!--SLIDER PAERT END-->
    
	<!--body start-->
    
    <div class="container middle-content">
	
    <div class="information-body ">
	<div class="row clearfix">
    <div class="mar-t40">
		<div class="col-md-8 column">
        <div class="profileid pad20">
        <div class="fl">
        <div>
         <img src="images/profile_img.png" alt=""> </div>
        <div> ID: <?= $_SESSION["nickName"] ?></div>
        </div>
        
       
        <h2>Level: Gold
        <br/> 
       Points: 90  <br/>
       Rank: 25
         </h2>
		<div class="clear"></div>
         </div>
        
		</div>
		<div class="col-md-4 column">
        <div class=" countdown"> 
         <h2> Count Down: 5 days 4hours </h2>
       <h2> <img src="images/dollar_icon.png" alt=""> $500</h2>
        </div>
        
		</div>
        </div>
	</div>
	<div class="row clearfix">
  
    <div class="mar-t40">
    
		<div class="col-md-8 column">
          <!--left 1st table start-->
        <div class=" subttl1 mar-t10">
        Recent Match History
        </div>
        <div>
        <table class="sample2 profiletable">

<tr class=" subttl2">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>
        
<tr class="d0-a">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>

<tr class="d1">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>
<tr class="d0-a">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>

<tr class="d1">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>
<tr class="d0-a">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>

<tr class="d1">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td style="text-align:left">Level</td>
</tr>



</table>
        </div> 
        
        <!--left 1st table end-->
        
           <!--left 2nd table start-->
        <div class=" subttl1 mar-t10">
        Most Played Hero
        </div>
        <div>
        
        <table class="sample2 profiletable">

<tr class=" subttl2">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>
        
<tr class="d0-a">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>

<tr class="d1">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>
<tr class="d0-a">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>

<tr class="d1">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>
<tr class="d0-a">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>

<tr class="d1">
<td>  Hero	</td>
<td>Match ID</td>
<td>Time Finished </td>
<td>Result</td>
<td> KDA (K/D/A)</td>
<td>Level</td>
</tr>



</table>
        </div> 
        
        <!--left 2nd table end-->
		</div>
		<div class="col-md-4 column">
        <div class="mar-t10">
        <!--right 1st table start-->
       <div class=" subttl1 mar-t10">
        All Matches
        </div>
        <div>
        <table class="sample2 profiletable">


        
<tr class="d0-a">
<td class="text-center">  Match: 5637          	</td>
<td class="text-center" style="font-size:14px;">Win Rate: 56.75%  </td>
<td class="text-center"> KDA: 3.7 </td>
</tr>

<tr class="d2">
<td colspan="3">  Normal Match (0.28%)	</td>
</tr>
<tr class="d0-a">
<td class="text-center">  Match: 5637          	</td>
<td  class="text-center" style="font-size:14px;">Win Rate: 56.75%  </td>
<td class="text-center"> KDA: 3.7 </td>
</tr>

<tr class="d2">
<td colspan="3">  Normal Match (0.28%)	</td>
</tr>
<tr class="d0-a">
<td class="text-center">  Match: 5637          	</td>
<td class="text-center" style="font-size:14px;">Win Rate: 56.75%  </td>
<td class="text-center"> KDA: 3.7 </td>
</tr>

<tr class="d2">
<td colspan="3">  Normal Match (0.28%)	</td>
</tr>
<tr class="d0-a">
<td class="text-center">  Match: 5637          	</td>
<td  class="text-center"style="font-size:14px;">Win Rate: 56.75%  </td>
<td class="text-center"> KDA: 3.7 </td>
</tr>

</table>
        </div> 
        
          <!--right 1st table end-->
          
          <!--right 2nd table start-->
       <div class=" subttl1 mar-t10">
       Recent Teammates
        </div>
        
        <div class="recentteammates">
        <img src="images/profileimg_1.png" alt="">
        <h2>Match: 5637 </h2>
        </div>
        <div class="recentteammates">
        <img src="images/profileimg_2.png" alt="">
        <h2>Match: 4537 </h2>
        </div>
        <div class="recentteammates">
        <img src="images/profileimg_3.png" alt="">
        <h2>Match: 3524 </h2>
        </div>
        
          <!--right 2nd table end-->
          
          
          <div class="spacer1"> </div>
          <!--right 3rd table start-->
          <div class=" subttl1 mar-t10">
       Recent Opponents
        </div>
        <div class="recentteammates">
        <img src="images/profileimg_1.png" alt="">
        <h2>Match: 5637 </h2>
        </div>
        <div class="recentteammates">
        <img src="images/profileimg_2.png" alt="">
        <h2>Match: 4537 </h2>
        </div>
        <div class="recentteammates">
        <img src="images/profileimg_3.png" alt="">
        <h2>Match: 3524 </h2>
        </div>
          
          <!--right 3rd table end-->
        </div>
        
		</div>
		
        </div>
        
       
        
      
        
	</div>
	
    
    </div>
</div>
    
    <!--body start-->

<!--footer start-->

<div class="main">
<div class="footerbg"> 

<div class="container">
	<div class="row clearfix">
		<div class="col-md-6 column">
        <div class="navrgt">
			<ul class="navbottom">
  <li><a href="#">HOME </a></li>
  <li><a href="#">About</a></li> 
  <li><a href="#">Winnings</a></li> 
  <li><a href="#">Contest Rules</a></li> 
  <li><a href="#">Faq</a></li> 
  <li><a href="#">Legal</a></li> 
  <li><a href="#">Contacts</a></li> 
</ul> 
</div>
		</div>
		<div class="col-md-6 column">
        
        <div class="copyrgtfont">
 NOVA © 2015. All rights reserved. Made with love in San-Francisco. 

 </div>
		</div>
	</div>
</div>
</div>
 </div>

<!--footer end-->

<script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>
</html>

	
	
<?php 
}

function login() {
	header("Location:login.php");
		
}



?>





