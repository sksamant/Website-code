<!DOCTYPE html>

<html>

  <head>
    <meta charset="UTF-8">
    <title>AXIS: Painting --- Confirmation page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="DESCRIPTION" content="Axis Painting: Quality painting on Bloomington, IN." />
    <meta name="KEYWORDS" content="axis, paint, painting, painter, bloomington, indiana, in, tyler, ty, spatta" />
    <meta name="copyright" content="&copy; 2004 Axis Enterprises" />
    <link rel="stylesheet" href="axis_style.css" type="text/css" />
    <link rel="shortcut icon" href="documents/favicon.ico" type="image/x-icon" />
    
    <?php 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];
    $phone = $_POST["phone"];
    $comments = $_POST["comments"];

?>
  </head>

  <body>
    <div id="pagebounds">
    	<div id="toplinks"> 
    		<span class="navitem"><a href="index.php" >Home<span>Know about us.</span></a></span>
			<span class="navitem"><a href="services.php">Services<span>Learn what we are doing and how can we help you.</span></a></span>
			<span class="navitem"><a href="references.php">References<span>Read what our customers say about us.</span></a></span>
			<span class="navitem"><a href="work.html">Our Work<span>A glimpse of our achivements.</span></a></span>
			<span class="navitem"><a href="tyler.php">Ask Ty<span>Get in touch with owner and let us know how can we help you</span></a></span>
        	<span class="navitem"><a href="Crew.html">Team AXIS<span>Know us better</span></a></span>
        	<span class="navitem"><a href="Jobs.html">Job PICs<span>Have a look at our finished jobs</span></a></span>
			<span class="navitem"><a href="Employment.html">Employment<span>Join our exciting team</span></a></span>	
                        
    	</div>
        <p style="font-size:20px;" align="center"> <i>"AXIS Painting - Revolving around your needs"</i> </p>
    </div>
    
    <div id="sideinfo-right" style="width: 25%; float:right;" >
      		<a button type="button" href="tyler.php" target="_blank" class="estimatebutton">Get a FREE Estimate</button></a>
            <p> Browse through our work </p>
            <a button type="button" href="ProjectsPIC/index.html" target="_blank" class="estimatebutton">Click Here</button></a>
      		<p> <b>t | 812-323-3730</b></p>
     		<p> <a href="mailto:axisent@bluemarble.net"><b>axisent@bluemarble.net</b></a> </p>
        	<p><b>We expertize in: </b></p>
        	<p style="font-size:15px;"><i>Interior Services<br>
           		Exterior Services<br>
           		Powerwashing<br>
           		VOC Compliance<br></i></p>
    </div>
    
    <div id="sideinfo-left"><!-- width: 15%; style="float:center; font:30px">-->
      Owner: <h3>Tyler Spatta</h3>
      <img class="green-man" src="Crew/green-man.png" />	
    </div> 
     
    <div id="content">
      <p style="font-size:20px;">
      <i>Want to see your house painted in hues of your dreams? Look no further than AXIS Painting - delivering quality painting services for over 20 years.</i></p>
    </div>

    <!-- Image slider code starts here -->
<?php 
	$formanswersdisplay = "<span class=\"formcat\">Name:</span> $name<br />";
	$formanswersdisplay .= "<span class=\"formcat\">E-mail:</span> $email<br />";
	$formanswersdisplay .= "<span class=\"formcat\">Address:</span> $address<br />";
	$formanswersdisplay .= "<span class=\"formcat\">City:</span> $city<br />";
	$formanswersdisplay .= "<span class=\"formcat\">State:</span> $state<br />";
	$formanswersdisplay .= "<span class=\"formcat\">Zip:</span> $zipcode<br />";
	$formanswersdisplay .= "<span class=\"formcat\">Phone:</span> $phone<br /><br />";
	$formanswersdisplay .= "<span class=\"formcat\">Comments:</span> $comments";
	
	$formanswers = "Name: $name\n";
	$formanswers .= "E-mail: $email\n";
	$formanswers .= "Address: $address\n";
	$formanswers .= "City: $city\n";
	$formanswers .= "State: $state\n";
	$formanswers .= "Zip: $zipcode\n";
	$formanswers .= "Phone: $phone\n\n";
	$formanswers .= "Comments: $comments";
	
    $to = "axisent@bluemarble.net"; 
    $from = "$name"; 
    $subject = "Someone has sent a question from the Ask Tyler page"; 
    $message = $formanswers; 

    $headers  = "From: $from\r\n"; 
    $success = mail($to, $subject, $message, $headers); 
	
    if ($success) 
        echo "<h3>Thank You!</h3><p>Your question was sent to Tyler and you will receive a reply shortly!</p>
		<p class=\"tagline\">Here are the answers you submitted:</p><p>$formanswersdisplay</p><p>Need to <a href=\"tyler.php\">go back</a> to the form?"; 
    else 
        echo "<h2>Error</h2>An error occurred when submitting your question.  Please go <a href=\"tyler.php\">back</a> and try again.  <br />Or you can <a href=\"mailto:axisent@bluemarble.net\"e-mail Tyler</a> directly."; 
?> 
<br />
<br />
<br />
<br />
<br />
<br />
<br />

  </div>

    <!-- Image slider code ends here -->

    <div>
      <p style="font-size:15px;" align="center">Call NOW or click
      <a href="tyler.php">  here </a>for FREE estimate!!!<br>
      If you can imagine it, we can make real!!!  </p>
    </div>
    
    <!-- Footer Section -->

    <footer>

      <hr align="center" width="75%" size = 3>
      <p align="center" width="75%" size = 3> C &nbsp 2014 AXIS Painting Inc | P.O. Box 6176 Bloomington IN 47407 |Phone: 812-323-3730 Fax: 812-876-8726 </p>
    </footer>

  </div>
</body>

</html>