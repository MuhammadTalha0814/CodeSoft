<?php
require '../php/conn.php';


$q="Select * from flight";
$query=mysqli_query($connection,$q);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="signuppage.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../userhomecss.css">

    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 1; i < tr.length; i++) {
                td = tr[i];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <title>Home</title>
</head>

<body>
    <div>
        <nav class="navbar  navbar-expand-lg navbar-dark bg-dark" id="customnavbar">
            <a class="navbar-brand" href="#">
                <img src="../airlinelogo.png" alt="" width="50" height="10%" style="border-radius: 20px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-75">
                    <li class="nav-item active">
                        <a class="nav-link mr-4" href="FlightsEdit.html" id="navbarlinks">Edit Flight <span
                                class="sr-only">(current)</span></a>
                        <div class="vr"></div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mr-4" href="viewComplaints.html" id="navbarlinks">View Complaints</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mr-4" href="ViewBookings.html" id="navbarlinks">View Bookings</a>
                    </li>


                </ul>


            </div>

            <div class="nav-item dropdown dropleft" style="margin-bottom: 80px; margin-right: 60px; width: 10%;">
                <a class="nav-link" href="#" id="accountdropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="color: #C7C5F4; font-weight: 700; float: right;">
                    <i class="login__icon fa fa-user" style="font-size:50px;"></i>
                </a>
                <div class="dropdown-menu " style="border-radius: 30px; margin-top: 60px; margin-right: 10px;"
                    aria-labelledby="accountdropdown">
                    <a class="dropdown-item" href="adminlogin.html" id="navbarddlinks">Log Out</a>

                </div>
            </div>


        </nav>

    </div>

    <div class="container-fluid mt-4" style="border-radius: 18px;">

        <div style="float: left; width: 50%;">
            <h1 style="color: #5955aa;font-weight: 700;">
                Flight Schedule
            </h1>
           

        </div>
        <div style="float: right; width: 50%; text-align: right;">
            <center>
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Flights"
                style="width:70%;margin-bottom: 10px; margin-top: 5px; border-width: 4px ; border-radius: 15px; border-color: #5955aa;">

            </center>
            
        </div>

        <div class="table-responsive ">
            <table class="table table-striped mt-4" id="myTable">
                <thead style="background-color: #C7C5F4;">
                    <tr>
                        <th scope="col">Flight No</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Date</th>
                        <th scope="col">Fare</th>
                        <th scope="col">Delete Flight</th>
                        <th scope="col">Update Flight Data</th>


                    </tr>
                </thead>
                <tbody>
                <?php
        $count=0;
        while($rows=mysqli_fetch_assoc($query))
        {
            $count++;
            ?>
            <tr>
                <td>
                    <?php echo $rows['FlightNo']; ?>
                </td>
                <td>
                    <?php echo $rows['Departure']; ?>
                </td>
                <td>
                    <?php echo $rows['Destination']; ?>
                </td>          
                <td>
                    <?php $date=date_create($rows['Date']);
                            echo date_format($date,"d-m-Y");?>
                </td>
                <td>
                    <?php echo $rows['Fare']; ?>
                </td> 
                <td>

                            <a href="delete.php? FlightNo=<?php echo $rows['FlightNo'];?>"><button class="btn"
                                    style="background-color:rgb(228, 5, 5); border-radius:4px; color: white">
                                    Delete Data
                                </button> </a>
                </td>
                <td>
                            <a href="update.html"><button class="btn"
                                    style="background-color:green; border-radius:4px; color: white">
                                    Update Data
                                </button> </a>
                </td>
            </tr>
            
            

            <?php
        }
        ?>



        </tbody>
    </table>

            <center>
                <a href="insertflight.html"><input type="submit" class="btn"
                        style="color: aliceblue; background: linear-gradient(270deg, #5D54A4, #6A679E);border-radius:10px ;margin-top: 10px;"
                        value="Insert New Record" required /><br></a>

            </center>
        </div>


    </div>

    <footer class="text-lg-start text-white bg-black" id="customnavbar"
        style="position: absolute; width: 100%; margin-top: 29.5vh;">
        <div class="container-fluid p-4">
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 text-center">
                    <h5 class="text-capitalize">Company Name</h5>
                    <div class="container-fluid">
                        <a class="fspan"><i class="fa fa-facebook-f"></i></a>
                        <a class="fspan"><i class="fa fa-twitter"></i></a>
                        <a class="fspan"><i class="fa fa-instagram"></i></a>
                        <a class="fspan"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 justify-content-start">
                    <h5 class="text-capitalize">Services We Provide</h5>
                    <ul class="nav-item">
                        <li class="nav-link"><a class="fottera" href="">Flight Schedule</a></li>
                        <li class="nav-link"><a class="fottera" href="">Flight Status</a></li>
                        <li class="nav-link"><a class="fottera" href="">Flight Booking</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-capitalize">Contact Info</h5>
                    <ul class="nav-item">
                        <li class="nav-link"><a class="fottera" href="tel: 03088925274">Contact: +92 308 8925274</a></li>
                        <li class="nav-link"><a class="fottera" href="mailto:mtstyle@gmail.com">Email: mtstyle@gmail.com</a></li>
                    </ul>
                    <div class="container-fluid p-3">
                        © 2023 Copyright
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>