<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Admin area</title>
    <link rel="stylesheet" href="adstyle.css" />
</head>
<body>

<meta charset="UTF-8">
    <meta name="propeller" content="0703b59bb39e4301e6746c2e614e67f7">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/apple-touch-icon.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
  <section class="menu menu1 cid-sjtZHTBnDH" once="menu" id="menu1-0">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black text-primary display-7" href="index.php">My Progress</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            
            <a download href="dwln\mpt_apk.apk">
  Download our new APP!


</a>
                

</a>
                
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="refer.php" target="_blank">
                        My Dashboard</a></div>
            </div>
        </div>
    </nav>
</section>

<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user dashboard page.</p>
        <p><a href="adlogout.php">Logout</a></p>
    </div>

    <form action="insert.php" method="post">
	<p>
    	<label for="mess">Message:</label>
        <input type="text" name="mess" id="mess">
    </p>
    <input type="submit" value="Add Records">
</form>

</body>
</html>
