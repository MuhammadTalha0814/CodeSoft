<?php
// Establish database connection
require('../php/conn.php');

// Check if departure is set
if (isset($_GET['departure'])) {
    // Sanitize input
    $departure = mysqli_real_escape_string($connection, $_GET['departure']);

    // Query destinations based on selected departure
    $query = "SELECT DISTINCT Destination FROM flight WHERE Departure='$departure'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result)>0)
    {

        echo "<select>";
        echo "<option selected disabled>---Destination---</option>";
        while ($rows = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $rows["Destination"] . "'>".$rows["Destination"]."</option>";
        }
        echo "</select>";
        
    }
    
}
?>
