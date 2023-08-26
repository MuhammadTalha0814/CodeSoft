<?php
// Establish database connection
require('../php/conn.php');

// Check if departure is set
if (isset($_GET['departure']) && isset($_GET['destination'])) {
    // Sanitize input
    $departure = mysqli_real_escape_string($connection, $_GET['departure']);
    $destination = mysqli_real_escape_string($connection, $_GET['destination']);

    // Query destinations based on selected departure
    $query = "SELECT Date FROM flight WHERE Departure='$departure' AND Destination='$destination'";
    $result = mysqli_query($connection, $query);

    
    if(mysqli_num_rows($result)>0)
    {

        echo "<select>";
        echo "<option selected disabled>---Dates---</option>";
        while ($rows = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $rows["Date"] . "'>".$rows["Date"]."</option>";
        }
        echo "</select>";
        
    }
    else
    {
        echo "<select>";
        echo "<option selected disabled>---Dates---</option>";
        echo "</select>";

    }
    
}
?>
