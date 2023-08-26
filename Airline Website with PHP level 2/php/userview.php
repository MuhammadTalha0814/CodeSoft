

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details  </title>
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
    <link rel="stylesheet" href="userview.css">

</head>

<body>
<div>
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
                        <a class="nav-link mr-4" href="../AdminEnd/FlightsEdit.php" id="navbarlinks">Edit Flight <span
                                class="sr-only">(current)</span></a>
                        <div class="vr"></div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mr-4" href="../AdminEnd/viewComplaints.html" id="navbarlinks">View Complaints</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link mr-4" href="../AdminEnd/ViewBookings.html" id="navbarlinks">View Bookings</a>
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
                    <a class="dropdown-item" href="../AdminEnd/adminlogin.html" id="navbarddlinks">Log Out</a>

                </div>
            </div>


        </nav>

    </div>

    </div>

    <?php
    require("conn.php");
    $id = $_REQUEST['TicketID'];
    
    $q = "SELECT * FROM bookticket WHERE TicketID=$id";
    $result = mysqli_query($connection, $q);
    $row = mysqli_fetch_assoc($result);
    if($row)
    {
        $image_path = $row['Image'];
    }
    else echo "Not Found";
    
    ?>
    

    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                <?php
                                                                echo '<img class="img-fluid p-2 img-radius" src="'.$image_path.'" alt="">';
                                                                ?>
                                                               
                                                                </div>
                                                                <h6 class="f-w-600"> <?php echo $row['FirstName'] ?>&nbsp;<br><?php echo $row['LastName'] ?></h6>
                                                                
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Ticket#&nbsp;<?php echo $row['TicketID'] ?></h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">CNIC</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['CNIC'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Passport Number</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['PassportNumber'] ?></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">phone Number</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['PhoneNumber'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Gender</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Gender'] ?></h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Flight#<?php echo $row['TicketID'] ?></h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Departure</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Departure'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Destination</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Destination'] ?></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Fare</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Fare'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Date</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['Date'] ?></h6>
                                                                    </div>
                                                                </div>
                                                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
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