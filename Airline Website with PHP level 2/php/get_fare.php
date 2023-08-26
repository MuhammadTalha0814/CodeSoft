<?php
// Establish database connection
require('../php/conn.php');

// Check if departure and destination are set
if (isset($_GET['departure']) && isset($_GET['destination'])) {
    // Sanitize input
    $departure = mysqli_real_escape_string($connection, $_GET['departure']);
    $destination = mysqli_real_escape_string($connection, $_GET['destination']);

    // Query fare based on selected departure and destination
    $query = "SELECT Fare FROM flight WHERE Departure='$departure' AND Destination='$destination'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['Fare'];
    }
}
?>
