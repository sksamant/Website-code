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
<?php include ('toplinks.txt'); ?>			
</div>

<div id="sideinfo">
<?php include ('sideinfo.txt'); ?>
</div>

  
  <div id="content">
  <p>
    <?php 
	$formanswers = "Name: $fname\n";
	$formanswers .= "SSN: $ssn\n";
	$formanswers .= "E-mail: $email\n";
	$formanswers .= "Other Name? $onamebut\n";
	$formanswers .= "Other Name used: $oname\n";
	$formanswers .= "Address: $address\n";
	$formanswers .= "Phone: $phone1\n";
	$formanswers .= "Date Available: $dateavail\n";
	$formanswers .= "Felony?: $felony\n";
	$formanswers .= "Explaination: $felonyexplain\n\n";
	
	$formanswers .= "Education\n\n";
	$formanswers .= "School Name: $ed1name\n";
	$formanswers .= "Course of study: $ed1course\n";
	$formanswers .= "Years Completed: $ed1yrs\n";
	$formanswers .= "Degree, Diploma, Certification: $ed1cert\n\n";
	
	$formanswers .= "School Name: $ed2name\n";
	$formanswers .= "Course of study: $ed2course\n";
	$formanswers .= "Years Completed: $ed2yrs\n";
	$formanswers .= "Degree, Diploma, Certification: $ed2cert\n\n";
	
	$formanswers .= "School Name: $ed3name\n";
	$formanswers .= "Course of study: $ed3course\n";
	$formanswers .= "Years Completed: $ed3yrs\n";
	$formanswers .= "Degree, Diploma, Certification: $ed3cert\n\n";
	
	$formanswers .= "School Name: $ed4name\n";
	$formanswers .= "Course of study: $ed4course\n";
	$formanswers .= "Years Completed: $ed4yrs\n";
	$formanswers .= "Degree, Diploma, Certification: $ed4cert\n\n";
	
	$formanswers .="Employment History\n\n";
	$formanswers .= "Company Name: $h1company\n";
	$formanswers .= "Dates: $h1date\n";
	$formanswers .= "Address: $h1address\n";
	$formanswers .= "Supervisor: $h1super\n";
	$formanswers .= "Phone: $h1phone\n";
	$formanswers .= "Contact Supervisor?: $h1contactsuper\n";
	$formanswers .= "Contact at Work?: $h1contactyou\n";
	$formanswers .= "Job Duties: $h1duties\n\n";
	
	$formanswers .= "Company Name: $h2company\n";
	$formanswers .= "Dates: $h2date\n";
	$formanswers .= "Address: $h2address\n";
	$formanswers .= "Supervisor: $h2super\n";
	$formanswers .= "Phone: $h2phone\n";
	$formanswers .= "Contact Supervisor?: $h2contactsuper\n";
	$formanswers .= "Job Duties: $h2duties\n\n";
	
	$formanswers .= "Company Name: $h3company\n";
	$formanswers .= "Dates: $h3date\n";
	$formanswers .= "Address: $h3address\n";
	$formanswers .= "Supervisor: $h3super\n";
	$formanswers .= "Phone: $h3phone\n";
	$formanswers .= "Contact Supervisor?: $h3contactsuper\n";
	$formanswers .= "Contact at Work?: $h3contactyou\n";
	$formanswers .= "Job Duties: $h3duties\n\n";
	
	$formanswers .= "References\n\n";
	$formanswers .= "Name: $ref1name\n";
	$formanswers .= "Occupation: $ref1occup\n";
	$formanswers .= "Address: $ref1address\n";
	$formanswers .= "Phone: $ref1phone\n\n";
	
	$formanswers .= "Name: $ref2name\n";
	$formanswers .= "Occupation: $ref2occup\n";
	$formanswers .= "Address: $ref2address\n";
	$formanswers .= "Phone: $ref2phone\n\n";
	
	$formanswers .= "Name: $ref3name\n";
	$formanswers .= "Occupation: $ref3occup\n";
	$formanswers .= "Address: $ref3address\n";
	$formanswers .= "Phone: $ref3phone\n\n";
	
    $to = "caroline@freshformsolutions.com"; 
    $from = "$name"; 
    $subject = "Applicant form from the application page"; 
    $message = $formanswers;

    $headers  = "From: $from\r\n"; 

    $success = mail($to, $subject, $message, $headers); 
    if ($success) {
        echo "<h2>Thank You!</h2><p>Your application has been sent in for review! You should receive a confirmation e-mail at the address you have provided ($email).</p>"; 
		mail ($email, 'Your application to AXIS Painting', $message, $headers);
		}
    else 
        echo "<h2>Error</h2>An error occurred when submitting your application.  Please go <a href=\"application.php\">back</a> and try again.  You might also try printing the form."; 
?>
  </p>
  </div>

</div>

</body>
</html>