<?php 
    session_start();
    if(isset($_SESSION['error']))
		{
            //echo '<body style="background-color:#E3E2DF">';
			echo ('<p style="color:red" align="center">'.$_SESSION['error'].'</p>');
			unset($_SESSION['error']);
		}
		if(isset($_SESSION['success']))
		{
            //echo '<body style="background-color:#E3E2DF">';
			echo('<p style="color:green" align="center">'.$_SESSION['success'].'</p>');
            unset($_SESSION['success']);
        }
    echo('<p style="color:black" align="center"> Your team registration id is '.$_SESSION['teamid'].'</p>');
    unset($_SESSION['teamid']);
?>
<html>
<head>
<center>
<link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    </center>
</head>
<body bgcolor="#E3E2DF">
<center><br><br><b><br><br><br><br>
    <a href="index.php">Go back</a>
    </center>
</body>
