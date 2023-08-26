<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = 'airlinereservation';


 $connection = mysqli_connect($dbhost, $dbuser, $dbpass);

 if(!$connection)
 {
    echo "Server not connected";
 }
 else 
 {
    
    
 }
$DBS=mysqli_select_DB($connection,$db);
if($DBS)
{
    
}
else echo "no connected";

?>