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
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --><a href="http://www.auburn.edu">AU Home</a> &gt; <a href="http://www.auburn.edu/outreach/cgs">Center for Governmental Services</a> &gt; <a href="index.php">BTOP</a> &gt; <a href="BTOP_resources.html">Resources</a> &gt; Confirmation Page<!-- InstanceEndEditable --></p>
      <p class="breadcrumb">&nbsp;</p>
      <!-- InstanceBeginEditable name="body" -->
      <?php 
		$con = mysql_connect("web7.duc.auburn.edu","par0009","cgs.srl");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		
		mysql_select_db("par0009db", $con);
				
	  	$organization = $_POST["organization"];
		$certifying_official = $_POST["certifying_official"];
		$year = $_POST["year"];
		$month = $_POST["month"];
		$day = $_POST["day"];
		$period = $year."-".$month."-".$day;
		$hours_per_week = $_POST["hours_per_week"];
		$hours_per_weekend = $_POST["hours_per_weekend"];
		$staff_pcc_hours = $_POST["staff_pcc_hours"];
		$workstations = $_POST["workstations"];
		$users_weekly = $_POST["users_weekly"];
		$users_weekend = $_POST["users_weekend"];
		$broadband_speed = $_POST["broadband_speed"];
		$oa_people = $_POST["oa_people"];
		$oa_hours_offered = $_POST["oa_hours_offered"];
		$oa_hours_total = $_POST["oa_hours_total"];
		$mm_people = $_POST["mm_people"];
		$mm_hours_offered = $_POST["mm_hours_offered"];
		$mm_hours_total = $_POST["mm_hours_total"];
		$os_people = $_POST["os_people"];
		$os_hours_offered = $_POST["os_hours_offered"];
		$os_hours_total = $_POST["os_hours_total"];
		$esl_people = $_POST["esl_people"];
		$esl_hours_offered = $_POST["esl_hours_offered"];
		$esl_hours_total = $_POST["esl_hours_total"];
		$js_people = $_POST["js_people"];
		$js_hours_offered = $_POST["js_hours_offered"];
		$js_hours_total = $_POST["js_hours_total"];
		$other1 = $_POST["other1"];
		$other1_people = $_POST["other1_people"];
		$other1_hours_offered = $_POST["other1_hours_offered"];
		$other1_hours_total = $_POST["other1_hours_total"];
		$other2 = $_POST["other2"];		
		$other2_hours_offered = $_POST["other2_hours_offered"];
		$other2_hours_total = $_POST["other2_hours_total"];
		$other2 = $_POST["other3"];		
		$other2_hours_offered = $_POST["other3_hours_offered"];
		$other2_hours_total = $_POST["other3_hours_total"];
		$training1 = $_POST["training1"];
		$trn1_hours_per = $_POST["trn1_hours_per"];
		$trn1_people = $_POST["trn1_people"];
		$trn1_hours_ttl = $_POST["trn1_hours_ttl"];
		$training2 = $_POST["training2"];
		$trn2_hours_per = $_POST["trn2_hours_per"];
		$trn2_people = $_POST["trn2_people"];
		$trn2_hours_ttl = $_POST["trn2_hours_ttl"];
		$training3 = $_POST["training3"];
		$trn3_hours_per = $_POST["trn3_hours_per"];
		$trn3_people = $_POST["trn3_people"];
		$trn3_hours_ttl = $_POST["trn3_hours_ttl"];
		$training4 = $_POST["training4"];
		$trn4_hours_per = $_POST["trn4_hours_per"];
		$trn4_people = $_POST["trn4_people"];
		$trn4_hours_ttl = $_POST["trn4_hours_ttl"];
		$training5 = $_POST["training5"];
		$trn5_hours_per = $_POST["trn5_hours_per"];
		$trn5_people = $_POST["trn5_people"];
		$trn5_hours_ttl = $_POST["trn5_hours_ttl"];
		$training6 = $_POST["training6"];
		$trn6_hours_per = $_POST["trn6_hours_per"];
		$trn6_people = $_POST["trn6_people"];
		$trn6_hours_ttl = $_POST["trn6_hours_ttl"];
		$training7 = $_POST["training7"];
		$trn7_hours_per = $_POST["trn7_hours_per"];
		$trn7_people = $_POST["trn7_people"];
		$trn7_hours_ttl = $_POST["trn7_hours_ttl"];
		$pcc_activity1 = $_POST["pcc_activity1"];
		$pcc_description1 = $_POST["pcc_description1"];
		$pcc_activity2 = $_POST["pcc_activity2"];
		$pcc_description2 = $_POST["pcc_description2"];
		$pcc_activity3 = $_POST["pcc_activity3"];
		$pcc_description3 = $_POST["pcc_description3"];
		$acbp_description = $_POST["acbp_description"];
		$er_description = $_POST["er_description"];
		$date_submitted = date("y-m-j");
		
		
	
	
		$sql="INSERT INTO btop_monthly_reporting 
			( 	organization, 
				certifying_official, 
				period, 
				hours_per_week,
				hours_per_weekend,
				staff_pcc_hours,
				workstations, 
				users_weekly, 
				users_weekend,
				broadband_speed, 
				oa_people,
				oa_hours_offered, 
				oa_hours_total,
				mm_people,
				mm_hours_offered, 
				mm_hours_total,
				os_people,
				os_hours_offered, 
				os_hours_total,
				esl_people,
				esl_hours_offered, 
				esl_hours_total,
				js_people,
				js_hours_offered, 
				js_hours_total,
				other1, 
				other1_people,
				other1_hours_offered, 
				other1_hours_total,
				other2,
				other2_people,
				other2_hours_offered,
				other2_hours_total,
				other3,
				other3_people,
				other3_hours_offered,
				other3_hours_total,
				training1, 
				trn1_hours_per, 
				trn1_people, 
				trn1_hours_ttl, 
				training2, 
				trn2_hours_per, 
				trn2_people, 
				trn2_hours_ttl,
				training3, 
				trn3_hours_per, 
				trn3_people, 
				trn3_hours_ttl,
				training4, 
				trn4_hours_per, 
				trn4_people, 
				trn4_hours_ttl,
				training5, 
				trn5_hours_per, 
				trn5_people, 
				trn5_hours_ttl,
				training6, 
				trn6_hours_per, 
				trn6_people, 
				trn6_hours_ttl,
				training7, 
				trn7_hours_per, 
				trn7_people, 
				trn7_hours_ttl,
				pcc_activity1,
				pcc_description1,
				pcc_activity2,
				pcc_description2,
				pcc_activity3,
				pcc_description3,
				acbp_description,
				er_description, 
				date_submitted
			) 
			VALUES 
			(	'$organization', 
				'$certifying_official', 
				'$period',
				'$hours_per_week',
				'$hours_per_weekend',
				'$staff_pcc_hours',
				'$workstations', 
				'$users_weekly', 
				'$users_weekend',
				'$broadband_speed', 
				'$oa_people',
				'$oa_hours_offered', 
				'$oa_hours_total',
				'$mm_people',
				'$mm_hours_offered', 
				'$mm_hours_total',
				'$os_people',
				'$os_hours_offered', 
				'$os_hours_total',
				'$esl_people',
				'$esl_hours_offered', 
				'$esl_hours_total',
				'$js_people',
				'$js_hours_offered', 
				'$js_hours_total',
				'$other1', 
				'$other1_people',
				'$other1_hours_offered', 
				'$other1_hours_total',
				'$other2',
				'$other2_people',
				'$other2_hours_offered',
				'$other2_hours_total',
				'$other3',
				'$other3_people',
				'$other3_hours_offered',
				'$other3_hours_total',
				'$training1', 
				'$trn1_hours_per', 
				'$trn1_people', 
				'$trn1_hours_ttl', 
				'$training2', 
				'$trn2_hours_per', 
				'$trn2_people', 
				'$trn2_hours_ttl',
				'$training3', 
				'$trn3_hours_per', 
				'$trn3_people', 
				'$trn3_hours_ttl',
				'$training4', 
				'$trn4_hours_per', 
				'$trn4_people', 
				'$trn4_hours_ttl',
				'$training5', 
				'$trn5_hours_per', 
				'$trn5_people', 
				'$trn5_hours_ttl',
				'$training6', 
				'$trn6_hours_per', 
				'$trn6_people', 
				'$trn6_hours_ttl',
				'$training7', 
				'$trn7_hours_per', 
				'$trn7_people', 
				'$trn7_hours_ttl',
				'$pcc_activity1',
				'$pcc_descripton1',
				'$pcc_activity2',
				'$pcc_description2',
				'$pcc_activity3',
				'$pcc_description3',
				'$acbp_description',
				'$er_description',
				'$date_submitted'
			);";
		
		

		
		
		  if (!mysql_query($sql,$con))
		  {
		  	die('Error: ' . mysql_error());
		  }
		  
		
		  
		mysql_close($con);
	  ?>
        
      <h1> Thanks for submitting your monthly report. </h1>
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