<!DOCTYPE html>

<html>

  <head>
    <meta charset="UTF-8">
    <title>AXIS: Painting --- Application Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="DESCRIPTION" content="Axis Painting: Quality painting on Bloomington, IN." />
    <meta name="KEYWORDS" content="axis, paint, painting, painter, bloomington, indiana, in, tyler, ty, spatta" />
    <meta name="copyright" content="&copy; 2004 Axis Enterprises" />
    <link rel="stylesheet" href="axis_style.css" type="text/css" />
    <link rel="shortcut icon" href="documents/favicon.ico" type="image/x-icon" />
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

    
    <div id="sideinfo-left"><!-- width: 15%; style="float:center; font:30px">-->
      Owner: <h3>Tyler Spatta</h3>
      <img class="green-man" src="Crew/green-man.png" />	
    </div> 

    <!-- Main content starts here -->
   <form name="comments" method="post" action="sendapp.php">

  <div id="outerapp" align="center">
    
    <h3>Personal Data</h3>
    <table id="personal">
      <tr>
        <td width="212">Full Name <br />          <input type="text" name="fname" value="" size="70" /></td>

      </tr>
      <tr>
        <td>SS#
            <input type="text" name="ssn" value="" />
			E-mail
            <input type="text" name="email" value="" size="25" maxlength="35" /></td>
      </tr>
      <tr>
        <td>Is there another name in which educational and/or prior employment records may be listed?
            <input type="radio" name="onamebut" value="No" />
        No
        <input type="radio" name="onamebut" value="Yes" />
        Yes <br />
        Other name
          <input type="text" name="oname" value="" size="30" /></td>
      </tr>
      <tr align="top">
        <td>Address, City, State, Zip:<br />          <input type="text" name="address" value="" size="70" /></td>
      </tr>
      <tr>
        <td>Telephone
            <input type="text" name="phone1" value="" size="15" />            Date available for employment
            <input type="text" name="dateavail" value="" size="12" /></td>
      </tr>
      <tr>
        <td>Have you ever been convicted of a felony?
            <input type="radio" name="felony" value="Yes" />
        Yes
        <input type="radio" name="felony" value="No" />
        No</td>
      </tr>
      <tr>
        <td>If convicted of a felony, please explain.<br />
            <textarea name="felonyexplain" rows="2" cols="50" ></textarea></td>
      </tr>
    </table>
    <h3>Education</h3>
    <table id="education">
      <tr>
        <td width="234">&nbsp;</td>
        <td width="217">Name and Location</td>
        <td width="89">Course of Study</td>
        <td width="57">Years<br />
          </td>
        <td width="135">Certificate, Diploma<br />
  &nbsp;or Degree</td>
      </tr>
      <tr>
        <td>High School or Equivalent</td>
        <td><input type="text" name="ed1name" value="" size="20" /></td>
        <td><input type="text" name="ed1course" value="" size="13" /></td>
        <td><input type="text" name="ed1yrs" value="" size="2" /></td>
        <td><input type="text" name="ed1cert" value="" size="6" /></td>
      </tr>
      <tr valign="top" align="left">
        <td>Postsecondary Vocation School</td>
        <td><input type="text" name="ed2name" value="" size="20" /></td>
        <td><input type="text" name="ed2course" value="" size="13" /></td>
        <td><input type="text" name="ed2yrs" value="" size="2" /></td>
        <td><input type="text" name="ed2cert" value="" size="6" /></td>
      </tr>
      <tr>
        <td>College or University</td>
        <td><input type="text" name="ed3name" value="" size="20" /></td>
        <td><input type="text" name="ed3course" value="" size="13" /></td>
        <td><input type="text" name="ed3yrs" value="" size="2" /></td>
        <td><input type="text" name="ed3cert" value="" size="6" /></td>
      </tr>
      <tr>
        <td>Other Education/Special training/<br />
          Military Schools</td>
        <td><input type="text" name="ed4name" value="" size="20" /></td>
        <td><input type="text" name="ed4course" value="" size="13" /></td>
        <td><input type="text" name="ed4yrs" value="" size="2" /></td>
        <td><input type="text" name="ed4cert" value="" size="6" /></td>
      </tr>
    </table>
    <h3>Employment History</h3>
    <p>(Current or most recent job first, then previous jobs in order)</p>
    <h4>Most Recent</h4>
    <table class="history">
      <tr>
        <td width="426">Company name
            <input type="text" name="h1company" value="" size="37" />
			<br />
			Dates
            <input type="text" name="h1date" value="" size="40" /></td>
      </tr>
      <tr>
        <td>Address
            <input type="text" name="h1address" value="" size="60" /></td>
      </tr>
      <tr>
        <td>Supervisor
            <input type="text" name="h1super" value="" size="40" maxlength="50" />
			<br />
			Business Phone
            <input type="text" name="h1phone" value="" size="25" /></td>
      </tr>
      <tr>
        <td>May we contact your supervisor/employer?
            <input type="radio" name="h1contactsuper" value="Yes" />
            Yes
            <input type="radio" name="h1contactsuper" value="No" />
            No<br />
            May we contact you at work?
            <input type="radio" name="h1contactyou" value="Yes" />
Yes
<input type="radio" name="h1contactyou" value="No" />
No</td>
        
      </tr>
      <tr>
        <td>Job title and duties<br />
            <textarea name="h1duties" rows="5" cols="50"></textarea></td>
      </tr>
    </table>
    <h4>Second Most Recent</h4>
    <table class="history">
      <tr>
        <td width="426">Company name
            <input type="text" name="h2company" value="" size="37" />
            <br />
      Dates
      <input type="text" name="h2date" value="" size="40" /></td>
      </tr>
      <tr>
        <td>Address
            <input type="text" name="h2address" value="" size="60" /></td>
      </tr>
      <tr>
        <td>Supervisor
            <input type="text" name="h2super" value="" size="40" maxlength="50" />
            <br />
      Business Phone
      <input type="text" name="h2phone" value="" size="25" /></td>
      </tr>
      <tr>
        <td>May we contact your supervisor/employer?
            <input type="radio" name="h2contactsuper" value="Yes" />
      Yes
      <input type="radio" name="h2contactsuper" value="No" />
      No</td>
      </tr>
      <tr>
        <td>Job title and duties<br />
            <textarea name="h2duties" rows="5" cols="50"></textarea></td>
      </tr>
    </table>
    <h4>Third Most Recent</h4>
    <table class="history">
      <tr>
        <td width="426">Company name
            <input type="text" name="h3company" value="" size="37" />
            <br />
      Dates
      <input type="text" name="h3date" value="" size="40" /></td>
      </tr>
      <tr>
        <td>Address
            <input type="text" name="h3address" value="" size="60" /></td>
      </tr>
      <tr>
        <td>Supervisor
            <input type="text" name="h3super" value="" size="40" maxlength="50" />
            <br />
      Business Phone
      <input type="text" name="h3phone" value="" size="25" /></td>
      </tr>
      <tr>
        <td>May we contact your supervisor/employer?
            <input type="radio" name="h3contactsuper" value="Yes" />
      Yes
      <input type="radio" name="h3contactsuper" value="No" />
      No</td>
      </tr>
      <tr>
        <td>Job title and duties<br />
            <textarea name="h3duties" rows="5" cols="50"></textarea></td>
      </tr>
    </table>
    <h3>References</h3>
    <p>Please list three professional references that have knowledge of your professional experience and who are in a position to evaluate your ability to perform the job that you are applying for. </p>
    <table id="references">
      <tr>
        <td>name</td>
        <td>Occupation</td>
        <td>Address</td>
        <td>Telephone</td>
      </tr>
      <tr>
        <td valign="top"><input type="text" name="ref1name" value="" size="16" /></td>
        <td valign="top"><input type="text" name="ref1occup" value="" size="12" /></td>
        <td valign="top"><textarea name="ref1address" rows="3" cols="16"></textarea></td>
        <td valign="top"><input type="text" name="ref1phone" value="" size="10" /></td>
      </tr>
      <tr>
        <td valign="top"><input type="text" name="ref2name" value="" size="16" /></td>
        <td valign="top"><input type="text" name="ref2occup" value="" size="12" /></td>
        <td valign="top"><textarea name="ref2address" rows="3" cols="16"></textarea></td>
        <td valign="top"><input type="text" name="ref2phone" value="" size="10" /></td>
      </tr>
      <tr>
        <td valign="top"><input type="text" name="ref3name" value="" size="16" /></td>
        <td valign="top"><input type="text" name="ref3occup" value="" size="12" /></td>
        <td valign="top"><textarea name="ref3address" rows="3" cols="16"></textarea></td>
        <td valign="top"><input type="text" name="ref3phone" value="" size="10" /></td>
      </tr>
    </table>
    <h3>Note:</h3>
    <ul class="rules">
      <li>I certify that the information I have provided on this application is true, accurate and complete to the best of my knowledge.</li>
      <li>I understand that any false statement, misrepresentation or willful omission of facts may prevent my being hired or, if hired, may cause termination from employment.</li>
      <li>I understand that this application and records become the property of the AXIS which reserves the right to accept or reject them.</li>
      <li>I authorize AXIS to conduct work history, personal reference, motor vehicle records checks or other criminal background inquiries to determine my acceptability for employment, and I release from liability any person giving or receiving any such information.</li>
      <li>If hired, I will furnish documents required on Form I-9, Employment Eligibility Verification.</li>
      <li>If hired I agree to observe all rules, regulations and policies of AXIS.</li>
      <li class="important">To apply for this position, click the &quot;Submit Application&quot; button to indicate that you understand and accept these terms. Your application will then be submitted. If you are the successful candidate, you will be asked to sign a copy of this application.</li>
    </ul>
    <input type="submit" name="submit" value="Submit Application" />
  </div>
  </form>
  <p>&nbsp;</p>

    <!-- Main content ends here -->

    <br><br><br><br>

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