<?php
include_once '../php/conn.php';

if ($_POST['departure']!=null && $_POST['destination'] !=null && $_POST['date'] !=null && $_POST['fare'] !=null){
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $date=$_POST['date'];
    $fare= $_POST['fare'];
    $sql = "INSERT INTO flight VALUES(null,'$departure','$destination','$date','$fare')";
    $bool = mysqli_query($connection, $sql);
    if ($bool) {
        header("refresh: 0; url = ../AdminEnd/insertflight.html");
        
    }
    else
    {
        header("refresh: 0; url = ../AdminEnd/insertflight.html");
        
    }
}
?>