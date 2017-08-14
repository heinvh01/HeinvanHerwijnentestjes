<?php

require_once 'classes/Membership.php';
$membership = New Membership();

$membership->confirm_Member();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/default.css " />

<!--[if lt IE 7]>
<script type="text/javascript" > 
#src="js/DD_belatedPNG_0.0.7a-min.js"></script>
<![endif]-->


<title>Welkom to Hein's page</title>
<h1>Select your requirements</h1>

<form action="awnser.php" method="post">

		<p>What test tool do you need? <input type="text" name="Tools" /></p>
                <p>What testcase/script do you want to use? <input type="text" name="case" /></p>
                <p>What do you want to test <input type="text" name="Text" /></p>
                <p>When does the system need to be available <input type="date" name="date" /></p>
	<h3>Fill in the following only if you want te test to start automaticaly.</h3>
		<p>When does the test need to start? <input type="date" name="date2" /></p>
                <p>How long does the test need to run? <input type="time" name="time" /></p>


	<div class="button">
		<button type="submit" value="submit">Send your configurations</button>
	</div><br />
		        
</form>



</head>

<body>

<div id="container">
	<p>
If you have filled in the above correctly and the date is recieved by the database correcly your test system/test will start automatically and you get the data back in the mail. 
	 </p>
    <a href="login.php?status=loggedout">Log Out</a>
</div><!--end container-->

</body>
</html>
