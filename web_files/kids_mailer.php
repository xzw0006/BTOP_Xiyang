<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="8; url=index-kids.html" />
<title>Auburn Mixed Martial Arts (MMA)</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/superfish.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">

<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script src="js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="js/tms-0.4.1.js"></script>


<script>
		 
	$(document).ready(function(){
		$('.slider')._TMS({
			show:0,
			pauseOnHover:true,
			prevBu:'.prev',
			nextBu:'.next',
			playBu:'.play',
			duration:800,
			preset:'fade',
	        pagination:true,
			pagNums:false,
			slideshow:7000,
			numStatus:false,
			banners:false,
			waitBannerAnimation:false,
			progressBar:false
		})		
 })

function submission()
{
	var frm = document.getElementById("frm");
	frm.action='webformmailer.php';
	frm.submit();
}

function out(elem)
{
	elem.style.background='#ff4930';
	
}

function over(elem)
{
	elem.style.background='#638228';
	elem.style.border='1px solid #638228';
	elem.style.cursor="pointer";
}
	
</script>

<style type="text/css">
input.blank:focus
{
background-color: #FFC;
color: #003;
}
</style>

<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>

<div class="sl">
<div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slider_1.jpg" alt=""></li>
          <li><img src="images/slider_2.jpg" alt=""></li>
          <li><img src="images/slider_3.jpg" alt=""></li>
        </ul>
      </div>
  </div>
  </div>

<!--==============================header=================================-->
<header class="page">


  
  <div class="head-shape">
  		<div class="head-shape-content">
        	<ul class="list-headmenu">
                <li><a href="index-kids.html">Kids</a></li>
                <li><a href="index-MMA.html">MMA</a></li>
                <li><a href="index-Kickboxing.html">Kickboxing</a></li>
<li><a href="index-BJJ.html">Jui Jitsu</a></li>
<li><a href="index-TKD.html">Taekwondo</a></li>
            </ul>
            <div class="fright headicons">
            	<a href="https://www.facebook.com/AuburnMixedMartialArts" class="iconhead-1"></a>
                <a href="https://plus.google.com/109732802167091763993/about?gl=us&hl=en" class="iconhead-4"></a>
            </div>
        </div>
  </div>

    <div class="head-content">
    
    	<div class="logo">
      		<h1><a href="index.html"><img src="images/logo.png" alt="Auburn MMA"></a></h1>
  		</div>
        
        <div class="menu">

          <nav>
              <ul class="sf-menu">
               <li><a href="index.html">home</a>
                <li><a href="index-2.html">About</a></li>
                <li class="current"><a href="index-3.html">Classes</a></li>
                <li><a href="index-4.html">Events</a></li>
                <li><a href="index-6.html">Bully Proof</a></li>
                </ul>
    
               <div class="phone">
                <h2>Call today! <strong>(334) 887-0818</strong></h2>
              </div>
              
              <div class="clear"></div> 
          </nav>
          
          <div class="clear"></div>
        </div>

        <div class="clear"></div>
      </div>
        
  <div class="clear"></div>     
</header>    
<!--==============================content================================-->


  <section id="content">
    <div class="container_12">

    	<div class="block-4">
        	<h2><strong>KIDS MARTIAL ARTS</strong></h2>
           	<div class="wrap marg13">
                	<img src="images/kids1.png" class="img-indent5" alt="BJJ Kid">
                    <div class="extra-wrap">
                   	  <h2 class=""><strong>THANK YOU</strong></h2>
                   	  <p class="">&nbsp;</p>
                   	  <p class=""> Your request for a free introductory class has been recieved.<br>
               	      We will contact you shortly to setup a	time. </p><br>
                      <p class="text-3"> You will be redirected to the home page in 8 seconds.</p>
                   	  <table width="649" border="1">
  <tr>
                   	      <td width="385">&nbsp;</td>
                   	      <td width="10">&nbsp;</td>
       	        <td width="232" valign="middle">&nbsp;</td>
               	        </tr>
           	      </table>
                   	  <p class=""><br>
                   	  </p>
</div>
		  </div>
       	  <?php

$name = $_POST["Name"];
$email = $_POST["Name2"];
$phone = $_POST["Name3"];
$interest = $_POST["class"];
 
$to = "xzw0006@auburn.edu";
$subject = "Subject: Kids Class Email";


$message = "
<html>
<head>
<title>Email in HTML format</title>
</head>
<body>
<h4 style=\"color: black\"><em>This email contains user's information \nin a HTML format</em></h4>
<h4>Subject: The Request Submitted</h4>
<table border=\"0\" cellspacing=\"2\" cellpadding=\"2\" width=\"500\">
<tr>
<td colspan=\"2\" align=\"left\" style=\"padding-bottom: 6px;\">A user with the following information have register on the web form</td>
</tr>
<tr style=\"padding-bottom: 6px;\">
<th width=\"35%\" align=\"left\">User Name:</th>
<td width=\"65%\" align=\"left\">$name</td>
</tr>
<tr style=\"padding-bottom: 6px;\">
<th align=\"left\">User Phone Number:</th>
<td align=\"left\">$phone</td>
</tr>
<tr>
<th style=\"padding-bottom: 6px;\" align=\"left\">User Email:</th>
<td align=\"left\">$email </td>
</tr>
<tr>
<th style=\"padding-bottom: 6px;\" align=\"left\">User Interest:</th>
<td align=\"left\">$interest </td>
</tr>
<tr>
<th colspan=\"2\" align=\"left\">User's information Included.</th>
</tr>
</table>

<p>&nbsp;</p>

</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

$headers .= "From: $email" . "\r\n";

if($email!=''&&$email!=null)
{
mail($to,$subject,$message,$headers);
}
?>
       	  <div class="clear"></div>   
        </div>
     
        <div class="clear"></div>
     </div>  

  
</section> 
    

<!--==============================footer=================================-->
   <footer>

       <div class="container_12">
         <div class="grid_12">
           <p class="foot-text">Copyright 2013. Auburn MMA. All rights reserved.&nbsp;
             <!-- {%FOOTER_LINK} -->
           </p>
           <ul class="list-footmenu">
             <li><a href="index-kids.html">Kids</a></li>
             <li><a href="index-MMA.html">MMA</a></li>
             <li><a href="index-Kickboxing.html">Kickboxing</a></li>
<li><a href="index-BJJ.html">Jui Jitsu</a></li>
<li><a href="index-TKD.html">Taekwondo</a></li>
           </ul>
         </div>
         <div class="clear"></div>
  	  </div>

   </footer> 
</body>
</html>