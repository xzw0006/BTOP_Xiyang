<!-- Copyright [2008] Adobe Systems Incorporated.  All rights reserved -->
<!-- saved from url=(0013)about:internet -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<script src="../../../ECDI/CGS-eLearning/eLearning-1/standard.js" type="text/javascript"></script>
</head>
	<link rel="stylesheet" type="text/css" href="../../../ECDI/CGS-eLearning/eLearning-1/captivate.css" />

	

<body   bgcolor="#f5f4f1">

     <?php 
		$organization = $_POST["organization"];
		$name = $_POST["name"];
		//$training = $_POST['training'];
		$today = date("Y-m-d");
		$filename = "elearning_1";
		$title = $_POST["title"];
     	$industry = $_POST["industry"];
		$state = $_POST["state"];

		$con = mysql_connect("web7.duc.auburn.edu","par0009","cgs.srl");
		if (!$con)
  		{
  			die('Could not connect: ' . mysql_error());
  		}
		
		
		mysql_select_db("par0009db", $con);
		
		
	 if($training == "") {
		 $sql="INSERT INTO btop_training_users (name, organization, state, date, job_title, industry, file_name) 
			VALUES ('$name', '$organization', '$state', '$today', '$title', '$industry', '$filename');";
			
		}
	  
	  if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		mysql_close($con);
	  ?>       
	<div id="CaptivateContent">&nbsp;
	</div>
	<script type="text/javascript">
	   var so = new SWFObject("eLearning-1.swf", "Captivate", "100%", "100%", "9.0.28", "#CCCCCC");
		so.addParam("quality", "high");
		so.addParam("name", "Captivate");
		so.addParam("id", "Captivate");
		so.addParam("wmode", "window");
		so.addParam("bgcolor","#f5f4f1");
		so.addParam("menu", "false");
		so.addParam("AllowScriptAccess","always");
		so.addVariable("variable1", "value1");
		so.setAttribute("redirectUrl", "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash");
		so.write("CaptivateContent");
	</script>
      

	<script type="text/javascript">
		document.getElementById('Captivate').focus();
		document.Captivate.focus();
	</script>
</body>
</html>
