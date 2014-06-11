<!DOCTYPE html>

<html>

  <head>
    <meta charset="UTF-8">
    <title>AXIS: Painting --- Services Page</title>
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
      		<p> <b>t &nbsp|&nbsp 812-323-3730</b></p>
     		<p> <a href="mailto:axisent@bluemarble.net"><b>axisent@bluemarble.net</b></a> </p>
        	<p><b>Our services include: </b></p>
        	<p style="font-size:15px;"><i>Residential services<br>
           		Commercial/Industrial Services<br>
                Interior/ exterior painting and staining<br>
           		Powerwashing<br>
           		Environmentally safe applications<br></i></p>
    </div>
    
    <div id="sideinfo-left">
      Owner: <h3>Tyler Spatta</h3>
      <img class="green-man" src="Crew/green-man.png" />	
    </div> 
     
    <div id="content">
        <h3 align = "center">Ask Ty</h3>
        <p>Fill up below details to know about our services or to schedule a free estimate </p>
 
<form name="comments" method="post" action="sendcomments.php">

<table class="commentform" border="0" cellpadding="5" cellspacing="0">
<tr>
<td align="right">Name*:</td>
<td><input type="text" name="name" size=40 required/></td>
</tr>
<tr>
<td align="right">E-mail*:</td>
<td><input type="text" name="email" size=40 required/></td>
</tr>
<tr>
<td align="right">Address:</td>
<td><input type="text" name="address" size=40 /></td>
</tr>
<tr>
<td align="right">City:</td>
<td><input type="text" name="city" size=40 /></td>
</tr>
<tr>
<td align="right">State:</td>
<td><input type="text" name="state" size=40 /></td>
</tr>
<tr>
<td align="right">Zip:</td>
<td><input type="text" name="zipcode" size=40 /></td>
</tr>
<tr>
<td align="right">Phone*:</td>
<td><input type="text" name="phone" size=40 required/></td>
</tr>
<tr>
<td align="right" valign="top">Comments:</td>
<td><textarea name="comments" cols="30" rows="6"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>

<td ><input  type="submit" value="Submit" />&nbsp;
<input type="reset" value="Reset Fields" /></td>
</tr>

</table>

</form>

 <p > * fields are required </p>  
  </div>
  

<!-- Footer Section -->

    <footer>

      <hr align="center" width="75%" size = 3>
      <p align="center" width="75%" size = 3> C &nbsp 2014 AXIS Painting Inc | P.O. Box 6176 Bloomington IN 47407 |Phone: 812-323-3730 Fax: 812-876-8726 </p>
    </footer>

  </div>
</body>

</html>

