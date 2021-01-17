<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "wlblog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$tit = mysqli_real_escape_string($link, $_REQUEST['tit']);
$mess = mysqli_real_escape_string($link, $_REQUEST['mess']);

 
// Attempt insert query execution
$sql = "INSERT INTO posts (tit, mess) VALUES ('$tit', '$mess')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

