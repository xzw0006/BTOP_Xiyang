<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template_BTOP.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- #BeginEditable "doctitle" -->
<title>Monthly Report 123 - Auburn University</title>
<!-- #EndEditable -->
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/sidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
<!-- InstanceBeginEditable name="head" -->
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
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --><a href="http://www.auburn.edu">AU Home</a> &gt; <a href="http://www.auburn.edu/outreach/cgs">Center for Governmental Services</a> &gt; <a href="index.php">BTOP</a> &gt;  Confirmation Page<!-- InstanceEndEditable --></p>
      <p class="breadcrumb">&nbsp;</p>
      <!-- InstanceBeginEditable name="body" -->
      <?php 
		$con = mysql_connect("web7.duc.auburn.edu","par0009","cgs.srl");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		$ONLINE_RESOURCES_LIVINGSTON_APR_23 = $_POST["ONLINE_RESOURCES_LIVINGSTON_APR_23"];
		$PHOTOSHOP_ABBEVILLE_APR_25 = $_POST["PHOTOSHOP_ABBEVILLE_APR_25"];
		$BASIC_COMPUTING_EUFAULA_APR_18_1 = $_POST["BASIC_COMPUTING_EUFAULA_APR_18_1"];
		$BASIC_COMPUTING_EUFAUAL_APR_18_2 = $_POST["BASIC_COMPUTING_EUFAUAL_APR_18_2"];
		$BASIC_COMPUTING_ASHLAND_MAY_8 = $_POST["BASIC_COMPUTING_ASHLAND_MAY_8"];
		$BASIC_COMPUTING_DEMOPOLIS_MAY_14 = $_POST["BASIC_COMPUTING_DEMOPOLIS_MAY_14"];
		$NAME = $_POST["NAME"];
		$BADGE = $_POST["BADGE"];
		$POSITION = $_POST["POSITION"];
		$COMPANY = $_POST["COMPANY"];
		$STREET1 = $_POST["STREET1"];
		$STREET2 = $_POST["STREET2"];
		$CITY = $_POST["CITY"];
		$STATE = $_POST["STATE"];
		$ZIP = $_POST["ZIP"];
		$AREACODE = $_POST["AREACODE"];
	    $PHONE1 = $_POST["PHONE1"];
		$PHONE2 = $_POST["PHONE2"];
		$EMAIL = $_POST["EMAIL"];
		$SPECIAL= $_POST["SPECIAL"];
		$Day = date("Y-m-d");
		
		mysql_select_db("par0009db", $con);
				
	  	
		
		$sql="INSERT INTO course1_registration 
			( 	Date,
				ONLINE_RESOURCES_LIVINGSTON_APR_23,
				PHOTOSHOP_ABBEVILLE_APR_25,
				BASIC_COMPUTING_EUFAULA_APR_18_1,
				BASIC_COMPUTING_EUFAUAL_APR_18_2,
				BASIC_COMPUTING_ASHLAND_MAY_8,
				BASIC_COMPUTING_DEMOPOLIS_MAY_14,
				NAME,
				BADGE,
				POSITION,
				COMPANY,
				STREET1,
				STREET2,
				CITY,
				STATE,
				ZIP,
				AREACODE,
	    		PHONE1,
				PHONE2,
				EMAIL,
				SPECIAL
				
			) 
			VALUES 
			(   '$Day',
				'$ONLINE_RESOURCES_LIVINGSTON_APR_23',
				'$ONLINE_RESOURCES_ABBEVILLE_APR_11',
				'$PHOTOSHOP_ABBEVILLE_APR_25',
				'$BASIC_COMPUTING_EUFAULA_APR_15_1',
				'$BASIC_COMPUTING_EUFAULA_APR_15_2',
				'$BASIC_COMPUTING_EUFAULA_APR_18_1',
				'$BASIC_COMPUTING_EUFAUAL_APR_18_2',
				'$BASIC_COMPUTING_ASHLAND_MAY_8',
				'$BASIC_COMPUTING_DEMOPOLIS_MAY_14',
				'$NAME', 
				'$BADGE', 
				'$POSITION', 
				'$COMPANY', 
				'$STREET1', 
				'$STREET2', 
				'$CITY', 
				'$STATE', 
				'$ZIP', 
				'$AREACODE', 
	    		'$PHONE1', 
				'$PHONE2', 
				'$EMAIL', 
				'$SPECIAL'
			);";
		
		  if (!mysql_query($sql,$con))
		  {
		  	die('Error: ' . mysql_error());
		  }
				  
		mysql_close($con);
	  ?>
        
      <h1> Thank you for registering. We'll call or e-mail you shortly to confirm your participation.</h1>
      <br><br>
      <p style="font-size:18px; float:right;"> <a href="http://www.auburn.edu/outreach/cgs/BTOP/BTOP_resources.html">Return</a></p>
      
      <p>&nbsp;</p>
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