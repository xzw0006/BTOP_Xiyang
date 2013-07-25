<!DOCTYPE html>
<html>
<head>
<title>Data - Auburn University</title>
<link rel="stylesheet" href="https://fp.auburn.edu/template/styles/sidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
</head>
<body>
<div id="pageWrap"> 
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      	<a href="http://www.auburn.edu"><img src="https://fp.auburn.edu/template/styles/images/headerLogo.png" alt="Auburn University Homepage" /></a>
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
            <input type="image" src="https://fp.auburn.edu/template/styles/images/searchButton2.png" name="sa" accesskey="z" tabindex="2" alt="Search" value="Submit" class="searchButton" />
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
  </div>
  <div id="contentArea">
    <div class="contentDivision"> 
      <p class="breadcrumb"> <a href="http://www.auburn.edu">AU Home</a> &gt; <a href="http://www.auburn.edu/outreach/cgs">Center for Governmental Services</a> &gt; <a href="index.php">BTOP</a> &gt; Confirmation</p>
      <p class="breadcrumb">&nbsp;</p>
<?php 
		$con = mysql_connect("web7.duc.auburn.edu","par0009","cgs.srl");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		mysql_select_db("par0009db", $con);
		
		$training1= $_POST["computer"];
		$training2= $_POST["Win7"];
		$training3= $_POST["MacOS"];
		$training4= $_POST["online_job_sources"];
		$training5= $_POST["online_security"];
		$training6= $_POST["photoshop"];
		
		$salutation = $_POST["salutation"];
		$name = $_POST["name"];
		$title = $_POST["title"];
		$organization = $_POST["organ"];
		$street_add1 = $_POST["street1"];
		$street_add2 = $_POST["street2"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zipcode = $_POST["zip"];
		$phone = $_POST["phone"];
	    $email = $_POST["email"];
	
		$Date = date("Y-m-d");

		
		$sql="INSERT INTO btop_request_users 
			( 
			TRAINING1,
			TRAINING2,
			TRAINING3,
			TRAINING4,
			TRAINING5,
			TRAINING6,
			SALUTATION,
			NAME,
			POSITION,
			ORGANIZATION,
			STREET1,
			STREET2,
			CITY,
			STATE,
			ZIPCODE,
			PHONE,
			EMAIL_ADDRESS,
			DATE			
			) 
			VALUES 
			(  	
				'$training1',
				'$training2',
				'$training3',
				'$training4',
				'$training5',
				'$training6',
				'$salutation',
				'$name',
				'$title',
				'$organization',
				'$street_add1',
				'$street_add2',
				'$city',
				'$state',
				'$zipcode',
				'$phone',
				'$email',	
				'$Date'
		)";
		
		$query = mysql_query($sql);
		  if (!$query)
		  {
		  	die('Error: ' . mysql_error());
		  }
				  
		mysql_close($con);
	  ?>
        
      <h2 style="color:#06C;">Submission Confirmation</h2>
      <p>&nbsp;</p>
      <p>Your request for the Classroom Training has been successfuly received.<br>
      </p>
      <p>Please click <a href="index.php">here</a> to return to the BTOP main page.</p>
      <p></p>
      <h1>&nbsp;</h1>
      <br>
      <p>&nbsp;</p>
<br>
      <p style="font-size:18px; float:right;"> <a href="../index.php">Return to main page</a></p>


      <p>&nbsp;</p>
      <h3>&nbsp;</h3>
      <h3>&nbsp;</h3>
	  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
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
      href="Training.htm" 
      target=_self>Training &amp; Professional<br>
  Development</A> <img src="../images/spacer_new.gif" alt="" width="97" height="9"> <A 
      href="../tax/TaxandFinance.htm" 
      target=_self>Tax &amp; Finance</A></p>
<p class="sidebarTitle">&nbsp;</p>
<div class="orangeDecorBar">&nbsp;</div>
<p class="sidebarTitle"> Professional Development SERVICES</p>
<p>
<p><span class="home-calendar-item"><a href="Training_GeneralTraining.htm">General Training</a></span>
<p><span class="home-calendar-item"><a href="Training_CertificationPrograms.htm">Professional Certification</a></span>
<p><span class="home-calendar-item"><a href="../algti/index.htm"><span class="style23">Alabama Local Government Training Institute</span></a></span>
<p><span class="home-calendar-item"><a href="../cre/index.htm">Certified Revenue Examiner</a></span>
<p class="home-calendar-item"><a href="../propertytax/index.htm">Property Tax Administration</a>
<p class="home-calendar-item"><a href="EmergencyManagement.htm">Emergency Management </a>
<p class="home-calendar-item"><a href="http://www.aappa-hr.org" target="_blank">Public Personnel Administration</a>
<p class="home-calendar-item"><a href="Training_AnnualConferences.htm">Annual Conferences </a>
<p class="sidebarTitle">&nbsp;</p>
<p class="sidebarTitle"></p>
<p>
<p class="sidebarTitle">&nbsp;</p>
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
      <p><A href="../algti/about_us/contacts.htm">Contact Us </A><BR>
Copyright
  <!--                        var time=new Date();                        var year=time.getYear();                        if (year < 2000) year = year + 1900;                        document.write(year);                      //-->
2013 Center for Governmental Services at Auburn University<br>
Webmaster: Patick Rose, 844-1914
<br></div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
</html>