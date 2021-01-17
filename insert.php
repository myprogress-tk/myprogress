<html>

<head>

<script data-ad-client="ca-pub-8748619972226353" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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

<!-- Blog Updates -->
<center>
<link rel="shortcut icon" href="assets/images/apple-touch-icon.png" type="image/x-icon">


<?php
$con = mysql_connect("localhost", "root", "",);
$db = mysql_select_db("wlblog", $con);
if(isset($_POST['submit'])){ 
$tit = $_POST['tit'];
$mess = $_POST['mess'];
if($tit !=''||$mess !=''){
//Insert Query of SQL
$query = mysql_query("insert into posts(tit, mess,) values ('$tit', '$mess')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($con); // Closing Connection with Server
?>

</center>