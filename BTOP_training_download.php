<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template_BTOP.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- #BeginEditable "doctitle" -->

<title>
Center for Governmental Services
</title>
<!-- #EndEditable -->
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/sidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
<!-- InstanceEndEditable -->
</head>
<body>
<div id="pageWrap"> 
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      	<a href="http://www.auburn.edu"><img src="../images/headerLogo.png" alt="Auburn University Homepage" /></a>
      </div>
      <div id="headerTitle">
        <div class="topLinks">
          <a href="http://www.auburn.edu/main/sitemap.php">A-Z Index</a> | 
          <a href="http://www.auburn.edu/map">Map</a> | 
          <a href="http://www.auburn.edu/main/auweb_campus_directory.html" class="lastTopLink">People Finder</a>
        </div>
        <form action="http://search.auburn.edu" id="searchForm" method="get">
          <div class="searchBox">
            <input type="text" name="q" id="q" accesskey="q" size="28" tabindex="1" class="searchField" onfocus="if(this.value=='Search AU...'){this.value='';this.style.color='black'}" onblur="if(this.value=='')this.value='Search AU...';this.style.color='grey'" value="Search AU..." />
            <input type="image" src="../images/searchButton2.png" name="sa" accesskey="z" tabindex="2" alt="Search" value="Submit" class="searchButton" />
          </div>
          <input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm" />
          <input type="hidden" name="ie" value="utf-8" />
          <label for="q" style=" position:absolute; left:-9999px; visibility:hidden;">Enter your search terms</label>
        </form>
        <div class="titleArea">
        	<span class="mainHeading">Center for Governmental Services</span>
          <span class="subHeading">A Division of Auburn University Outreach</span>
        </div>
      </div>
    </div>
		<table class="nav">
      <tr>
        <td><a href="../about_us/welcome.html">WELCOME</a></td>
        <td><a href="../about_us/about_us.htm">ABOUT US</a></td>
        <td><a href="../about_us/staff.html">STAFF</a></td>
        <td><a href="../about_us/contacts.htm">CONTACTS</a></td>
      </tr>
    </table>
  </div>
  <div id="contentArea">
    <div class="contentDivision"> 
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --><a href="http://www.auburn.edu">AU Home</a> &gt; <a href="http://www.auburn.edu/outreach/cgs">Center for Governmental Services</a> &gt; <a href="index.php">BTOP</a> &gt; <a href="BTOP_resources.html">Resources</a> &gt; Online Training <!-- InstanceEndEditable --></p>
      <p class="breadcrumb">&nbsp;</p>
      <!-- InstanceBeginEditable name="body" -->
      <h1><strong>Online Training</strong></h1>
      <p>&nbsp;</p>
      <!--<p>You must use an HTML5 enable browser in order to view this video, such as Safari, Google Chrome or Internet Explorer 9. If you are viewing this video using Firefox, you may be able to right click on the "X" in the box below and select "view video."</p>
      <p>&nbsp;</p> -->
      <?php 
		$con = mysql_connect("web7.duc.auburn.edu","par0009","cgs.srl");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		
		$organization = $_POST["organization"];
		$name = $_POST["name"];
		$training = $_POST['training'];
		
		$today = date("Y-m-d");
		
		mysql_select_db("par0009db", $con);
		
		
	 if($training != "none") {
		  $sql="INSERT INTO btop_training_users (name, organization, date, file_name) 
			VALUES ('$name', '$organization', '$today', '$training');";
		
				
	
		  switch ($training) {
			case "win1":
			/*	echo "<h2>Getting Started: Start Bar</h2><br><video src=\"training/1_Start Bar.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>";*/ 
				echo "<h2>Getting Started: Start Bar</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/1_Start Bar.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
			
				
				break;
			case "win2":
				/*echo "<h2>Getting Started: Using the Task Bar</h2><br><video src=\"training/2_Using the taskbar.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>";*/
				
					echo "<h2>Getting Started: Using the Task Bar</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/2_Using the taskbar.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
					
				break;
			case "win3":
			
				/* echo "<h2>Getting Started: My Computer<h2><br><video src=\"training/3_My computer.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				
				echo "<h2>Getting Started: My Computer</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/3_My computer.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				break;
			case "win4":
				
				/*echo "<h2>Getting Started: Control Panel (pt. 1)<h2><br><video src=\"training/4_Control Panel 1.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				echo "<h2>Getting Started: Control Panel (pt. 1)</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/4_Control Panel 1.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				break;
			case "win5":
			
				/*echo "<h2>Getting Started: Control Panel (pt. 2)<h2><br><video src=\"training/5_Control Panel 2.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
					echo "<h2>Getting Started: Control Panel (pt. 2)</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/5_Control Panel 2.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				
				
				break;
			case "mac1":
			
				echo "<h2>Getting Started: Intro</h2><br> <div style=\"width:650px\" id=\"__ss_7997248\"> <strong style=\"display:block;margin:12px 0 4px\"></strong> <iframe src=\"http://www.slideshare.net/slideshow/embed_code/7997248\" width=\"650\" height=\"475\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\"></iframe> </div>"; 
				break;
			case "mac2":
				echo "<h2>Getting Started: The Desktop</h2><br> <div style=\"width:650px\" id=\"__ss_7997258\"> <strong style=\"display:block;margin:12px 0 4px\"></strong> <iframe src=\"http://www.slideshare.net/slideshow/embed_code/7997258\" width=\"650\" height=\"475\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\"></iframe> </div>";
				break;
			case "mac3":
				echo "<h2>Getting Started: The Finder</h2><br> <div style=\"width:650px\" id=\"__ss_7997261\"> <strong style=\"display:block;margin:12px 0 4px\"></strong> <iframe src=\"http://www.slideshare.net/slideshow/embed_code/7997261\" width=\"650\" height=\"475\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\"></iframe>  </div>";
				break;
			case "mac4":
				echo "<h2>Getting Started: Safari</h2><br><div style=\"width:650px\" id=\"__ss_7997268\"> <strong style=\"display:block;margin:12px 0 4px\"></strong> <iframe src=\"http://www.slideshare.net/slideshow/embed_code/7997268\" width=\"650\" height=\"475\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\"></iframe>  </div>";
				break;
			case "win6":
				/*echo "<h2>Troubleshooting: Phishing</h2><br><video src=\"training/Windows_Security_Training_Editing_phishing.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				
					echo "<h2>Troubleshooting: Phishing</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/Windows_Security_Training_Editing_phishing.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				break;
			case "win7":
				/*echo "<h2>Troubleshooting: Safe Browsing</h2><br><video src=\"training/Windows_Security_Training_Editing_safe_browsing.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				
				echo "<h2>Troubleshooting: Safe Browsing</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/Windows_Security_Training_Editing_safe_browsing.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				break;
			case "win8":
				/*echo "<h2>Troubleshooting: Spyware<h2><br><video src=\"training/Windows_Security_Training_Editing_spyware.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				
				echo "<h2>Troubleshooting: Spyware</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/Windows_Security_Training_Editing_spyware.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				break;
			case "win9":
				/*echo "<h2>Troubleshooting: Maintenance<h2><br><video src=\"training/Windows_Security_Training_Editing_troubleshooting.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				
				echo "<h2>Troubleshooting: Maintenance</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/Windows_Security_Training_Editing_troubleshooting.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				break;
			case "win10":
				/*echo "<h2>Troubleshooting: Viruses<h2><br><video src=\"training/Windows_Security_Training_Editing_Viruses.mp4\" height=\"400px\" width=\"600px\" controls=\"contrtols\"/>"; */
				
				echo "<h2>Troubleshooting: Viruses</h2><br><div id='mediaplayer'></div><script type=\"text/javascript\"> jwplayer(\"mediaplayer\").setup({
        				autostart: true,
        				controlbar: \"bottom\",
        				file: \"training/Windows_Security_Training_Editing_Viruses.mp4\",
        				
        				flashplayer: \"jwplayer/player.swf\",
        				volume: 80,
						frontcolor: 'dc5513',
   					    lightcolor: 'dc5513',
        				width: 600,
						height: 400
   						 });
					</script>";
				
				break;
			
		}
	  } 
	  
	  if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		mysql_close($con);
	  ?>
      <br><br>
      
      <a href="BTOP_online_training.html" style="float:right; font-size:24px">Return</a>
      
      

     
        

      

      
      
      
      
      
      
      
      
      
            
      <h3>&nbsp;</h3>

      <h3>&nbsp;</h3>
      <h3>&nbsp;</h3>
<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">&nbsp;</p>
    </div>
    <div class="sidebar">
<h1>PROGRAMS</h1>
      <br />
      <p class="sidebarTitle"><A 
      href="../personnel/Personnel.htm" 
      target=_self>Human Resources Consulting</A><img src="../images/spacer_new.gif" alt="" width="97" height="9"> <A 
      href="../applied_research/AppliedResearch.htm" 
      target=_self>Applied Research</A> <img src="../images/spacer_new.gif" alt="" width="97" height="9"> <A 
      href="../SRL/SRL.php" 
      target=_self>Survey Research</A> <img src="../images/spacer_new.gif" alt="" width="97" height="9"> <A 
      href="../training/Training.htm" 
      target=_self>Training &amp; Professional<br>
Development</A> <img src="../images/spacer_new.gif" alt="" width="97" height="9"> <A 
      href="../tax/TaxandFinance.htm" 
      target=_self>Tax &amp; Finance</A></p>
      <p class="sidebarTitle">&nbsp;</p>
      <div class="orangeDecorBar">&nbsp;</div>
      <p class="sidebarTitle">BTOP</p>
      <p>      
      <p><span class="home-calendar-item"><a href="BTOP.html">Project Summary</a></span>
      <p><span class="home-calendar-item"><a href="BTOP_partners.html">Partners</a></span>
      <p><span class="home-calendar-item"><a href="BTOP_action_image.html">BTOP In Action</a></span>
      <p><span class="home-calendar-item"><a href="broadbandmap.html">Service Map</a></span>
      <p><span class="home-calendar-item"><a href="BTOP_resources.html">Participant Resources</a></span>
      <p><span class="home-calendar-item"><a href="http://www2.ntia.doc.gov/">BTOP National Website</a></span>
      
<p class="sidebarTitle">&nbsp;</p>
     </div>
  </div>
  <div id="contentArea_bottom"></div>
  <div id="footerWrap">
    <div id="footer">
   <div class="footSection">
      <ul>
        <li>Center for Governmental Services<br>
          2236 Haley Center<br>
          Auburn University<br>
          Alabama 36849-5268 <BR>
          Phone (334) 844-4781 | Fax (334) 844-1919</li>
      </ul>
    </div>
    <div class="footSection"> 
      <p><br>
        <a href="http://www.facebook.com/pages/Center-for-Governmental-Services/278726875565598"><img src="../images/facebookicon.gif" alt="facebook" width="42" height="42" border="0"></a></p>
      </p>
      </div>
    <div class="footSection noBorder">
      <p><img src="http://www.auburn.edu/template/images/arra.png" alt="American Recovery and Reinvestment Act" /><br /><a href="http://www.auburn.edu/arra">American Recovery &amp;<br />Reinvestment Act</a></p>
    </div>
    <!-- <div class="clear"></div> -->
  </div>  
    <div id="subfooter">
      <p><A href="about_us/contacts.htm">Contact Us </A><BR>
Copyright
  <!--                        var time=new Date();                        var year=time.getYear();                        if (year < 2000) year = year + 1900;                        document.write(year);                      //-->
2013 Center for Governmental Services at Auburn University<br>
Webmaster: Patick Rose, 844-1914
<br></div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
<!-- InstanceEnd --></html>