<!DOCTYPE html>
<html>
<style>table {text-allign: center:}
</style>
<head>
<!-- 3rd party app widgets -->
<script data-ad-client="ca-pub-8748619972226353" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<meta name="propeller" content="0703b59bb39e4301e6746c2e614e67f7">
<meta name="thepentestfac-verification" content="uZ21uOMRqxnIvBq">
<!-- styling -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v5.2.0, mobirise.com">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/apple-touch-icon.png" type="image/x-icon">
<meta name="description" content="">
  <title>Home</title>
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
<!-- header -->
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
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="refer.php" target="_blank">
                        My Dashboard</a></div>
            </div>
        </div>
    </nav>
</section>
<!-- main content -->
<section class="header4 cid-sjtZJsGRPU mbr-fullscreen" id="header4-1">
    <div class="container">
        <div class="row">
            <div class="content-wrap">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>My</strong><br><strong>Progress</strong></h1>
                <p class="mbr-fonts-style mbr-text mbr-white mb-3 display-7">
                    Use this tool to keep track of your weight loss&nbsp;progress&nbsp;</p>
                <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="db\index.php" target="_blank">My Dashboard</a></div>
            </div>
        </div>
    </div>
</section>
<br><br><br>

<p class="mbr-fonts-style mbr-text mbr-white mb-3 display-7">
                    Use this tool to keep track of your weight loss&nbsp;progress&nbsp;</p></p>
<!-- Blog Updates -->
<center>
<section class="center" id="video2-3">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2">
                <strong>Latest Updates</strong></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style mb-0 mt-2 display-7">Tune in to some of our latest updates :)</h5>
        </div>
        <div class="row justify-content-center mt-4">
<?php
include_once 'dbb.php';
$result = mysqli_query($conn,"SELECT * FROM myusers");
$sql = "SELECT tit, mess, timest FROM posts ORDER BY timest DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<br>". "<br>". $row["tit"]. " ". "<br>" . $row["mess"]. "<br>"; 
  }
} else {
  echo "no blog posts yet :(";
}
$conn->close();
?>
<br><br><br>
                <i class="mbr-text pt-2 mbr-fonts-style display-4">
                Remember to track your progress every day to help you visualise your goal!</i>
               <br>
               <br>
               <br><br>
                <i>all emails will be read and and/or discarded if valued as spam, any new project ideas give me a shout. <br> my E-Mail is in the footer </i>
                <br><br> <br><br>
            </div>
        </div>
    </div>
</section> </center>
<!-- Footer -->
<section class="footer7 cid-sju0OjhhgU" once="footers" id="footer7-2">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    <a href="https://linkmix.co/2370029" class="text-primary" target="_blank">© Copyright 2021 IT5_J05H&nbsp;</a>
               <br>
                    <a href="addashboard.php" class="text-primary" target="_blank">Admin Area</a>
            <br> <a href="https://linkmix.co/2370029" class="text-primary" target="_blank"></a>
            <a href="mailto:joshua.rogers.2105@gmail.com">Email Me (joshua.rogers.2105@gmail.com)</a> 
                </p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><p style="flex: 0 0 auto; margin:0; padding-right:1rem;"><a href="https://mobirise.site/o" style="color:#aaa;"></a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/playervimeo/vimeo_player.js"></script>  <script src="assets/theme/js/script.js"></script>  
</body>
</html>