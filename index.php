<?php
    require ('steamauth/steamauth.php');  
  # You would uncomment the line beneath to make it refresh the data every time the page is loaded
  #$_SESSION['steam_uptodate'] = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>:: NOVA ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
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
    <li><a href='profile.php'><span>Profile</span></a></li>
     <li><a href='match.html'><span>Find match</span></a></li>
      <li><a href='shop.html'><span>Item shop</span></a></li>
       <li><a href='leader.html'><span> Leader board</span></a></li>
        <li><a href='login.php'><span>Login</span></a></li>
   
   <li class='active has-sub'><a href='#'><span>Signup</span></a>
      <ul>
      	 <li><a href='signup.php'><span>SIGN UP</span></a> </li>
      	
<!--          <li ><a href='#'><span>FACEBOOK SIGN UP </span></a> </li> -->
         
<!--          <li><a href='#'><span>GMAIL SIGN UP</span></a> </li> -->
      </ul>
   </li>  
</ul>
    <?php
    if(!isset($_SESSION['steamid'])) {
      steamlogin(); //login button
    }  else {
      echo "<div class='container' style='color:white'>";
      include ('steamauth/userInfo.php');
      echo "Hello " . $steamprofile['personaname'];
      echo "here is your avatar: </br>" . '<img src="'.$steamprofile['avatarfull'].'" title="" alt="" /><br/>'; // Display their avatar!
      echo "link to all your information:" . 
      '<a href="http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=154D4B3E0F4EA647981E668CC71B10C3&steamids=' . $steamprofile['steamid'] . '">Profile</a>';
      echo "<br/>";
      echo "Your matching history:" . 
      '<a href="https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/V001/?key=154D4B3E0F4EA647981E668CC71B10C3&account_id=' . $steamprofile['steamid'] . '">Match History</a>';
          echo "<br/>";
      echo "List of all heroes:" . 
      '<a href="http://api.steampowered.com/IEconDOTA2_570/GetHeroes/v1/?key=154D4B3E0F4EA647981E668CC71B10C3">All Heroes</a>';
      echo "</div>";

      logoutbutton(); 
    }  
    ?>


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
<!-- 			<div class="paragraph"> -->
<!-- 				<P>Brand New Match Making System with Cash Prize for Every Player</p> -->
<!-- 				<a href="#" class="bannerbtn">START FOR FREE NOW</a> -->
<!-- 			</div>		   -->
        </li>
        <li>
          <img src="images/m-slide-bg-2.jpg" alt="">
<!-- 			<div class="paragraph"> -->
<!-- 				<P>Brand New Match Making System with Cash Prize for Every Player</p> -->
<!-- 				<a href="#" class="bannerbtn">START FOR FREE NOW</a> -->
<!-- 			</div>	 -->
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
    <!--body-1 start-->
    
	<div class="row clearfix">
		<div class="col-md-8 column">
        <div class="risingpubstar_bg">
       <div class="padding-30">
        <div class="flexislider-heading">
            <h1>Rising Pub Star</h1>
           
          </div>
		  
		    <div class="flexslider">
          <ul class="slides sliderli">
          
            <li>
  	    	  More than 15 tournaments are hold monthly to win Cash hold monthly to win Cash
  	    		</li>
               
  	    		<li>
  	    	     More than 15 tournaments are hold monthly to win Cash
  	    		</li>
  	    		
  	    	
          </ul>
          
            <div class="spacer1"> </div>
          
        </div>
          
        </div>
        
      
        </div>
        
		</div>
		<div class="col-md-4 column">
      <div class="nowoperation_ttl"> Now Operating  </div>
      
      <div class="nowoperation ">
      
        <ul>
					<li>
						 <!-- box -->
							<div class="pad10"> 
								
								<span><img src="images/dota2.png"> </span>
								<h2 class="large-font"><img src="images/dota_img.png"></h2>
								<div class="clear"></div>
								
							</div>
						 <!-- box end -->
					</li>
					
					<li>
						<!-- box -->
							<div class="pad10"> 
								
								<span><img src="images/lol.png"> </span>
								<h2 class="large-font"><img src="images/lol_img.png"></h2>
								<div class="clear"></div>
								
							</div>
						 <!-- box end -->
					</li>		
				</ul>
             
                </div>
        
		</div>
	</div>
    
<!--body-1 end-->

<!--body-2 start-->
<div>
	<div class="row clearfix">
		<div class="col-md-12 column mar-t40">			
            <div class="nowoperation_ttl"> 
                Tournaments Information & Price Pool                
			</div>
		</div>
	</div>
    
    <div class="row clearfix">    	
            <div class="col-md-12 column">
            	<div class="information-body">
                	 <div class="row clearfix">
                     <div class="pad10">
                     	<div class="col-md-4 column cash_tournament">Incoming Cash Tournaments                                    </div>
                        <div class="col-md-4 cash_tournament">5 days     18 hours     34 mins</div>
                        <div class="col-md-4 cash_tournament">15sec</div>
                        </div>
                     </div>                
                </div>
            </div>
	</div>
    
     <div class="row clearfix">    	
            <div class="col-md-12 column">
            <div class="information-body">
            
          <table class="sample table_font">
<tr class="d0">
<td> <img src="images/table_icon.png"> Bronze  </td>
<td><div class="table_win">  5 Wins </div></td>
<td>Items x 2</td>
</tr>
<tr class="d1">
<td> <img src="images/table_icon.png"> Silver   </td>
<td><div class="table_win"> Bronze + 5wins </div></td>
<td>$500.00</td>
</tr>
<tr class="d0">
<td> <img src="images/table_icon.png"> Golden   </td>
<td><div class="table_win"> Silver + 5wins </div></td>
<td>$3000.00</td>
</tr>
<tr class="d1">
<td> <img src="images/table_icon.png"> Nova Strike Match    </td>
<td><div class="table_win"> Members only </div></td>
<td>Items x 2</td>
</tr>
</table>

            </div>
            </div> </div>
	<div class="row clearfix">
		<div class="col-md-12 column">
        <div class="information-body"> 
        <div class="tournament_info">
         <button class="btn submitbtn">Sign up Now</button>
        
         </div>
        </div>
        </div> </div>
	
	
    </div> 
    
    
    <div>
	<div class="row clearfix mar-t30">
		<div class="col-md-12 column">
			
				<div class="nowoperation_ttl">
                Leader Information 
				</div>
			
		</div>
	</div>
	<div class="row clearfix">    
		<div class="col-md-12 column">
          <div class="information-body">
        <div class="row clearfix">
  <div class="pad10">
		<div class="col-md-3 column">
      <div class="information-image"> <img src="images/info-image.jpg" /> </div>
		</div>
		<div class="col-md-9 column">
        
      <div class="information-right">
            <h3>New Match Making System.</h3>
            <p>Lorem Ipsum is simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is             simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is simply dummy             textLorem Ipsum is simply dummy textLorem Ipsum is simply dummy textLorem Ipsum is simply du  </p>
            <div class="tournament_info_rgt">
             <button class="btn submitbtn">LEARN MORE</button> </div>
           </div>
		</div>
        </div>
        <div class="spacer1"> </div>
        </div>
        
        </div> </div>
	</div>
</div>
    
    </div>
</div>

<!--body-2 end-->



<!--body-3 start-->

</div>
<!--body-3 end-->

<!--body end-->

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
