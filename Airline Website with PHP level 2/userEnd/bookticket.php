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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="signuppage.css"> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../userhomecss.css">


    <style>
        .buttonsubmits {

            background: #fff;
            font-size: 14px;
            
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            
            align-items: center;
            width: 30%;
            color: #4C489D;
            box-shadow: 0px 2px 2px #5C5696;
            cursor: pointer;
            transition: .2s;
            text-align: center;
        }
    </style>

<script>
		function updateDestination(departure) {

            document.getElementById('fare').value = '';
            
            if(window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange=function()
            {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById('destination').innerHTML=this.responseText;
                    
                }
            }
            xmlhttp.open("GET","../php/get_destinations.php?departure="+departure,true);
            xmlhttp.send();
        }

        function updateDate() {
            var departure = document.getElementById('departure').value;
            var destination = document.getElementById('destination').value;

            
            if(window.XMLHttpRequest)
            {
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }

            xmlhttp.onreadystatechange=function()
            {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById('date').innerHTML=this.responseText;
                    
                }
            }
            xmlhttp.open("GET","../php/get_dates.php?departure="+departure+"&destination="+destination,true);
            xmlhttp.send();
        }

        


        function updateFare() {
                var departure = document.getElementById('departure').value;
                var destination = document.getElementById('destination').value;

                if (departure == '--Departure--' || destination == '--Destination--') {
                    return;
                }

                if(window.XMLHttpRequest) {
                    xmlhttp=new XMLHttpRequest();
                }
                else {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.onreadystatechange=function() {
                    if(this.readyState==4 && this.status==200) {
                        document.getElementById('fare').value=this.responseText;
                    }
        }

    xmlhttp.open("GET","../php/get_fare.php?departure="+departure+"&destination="+destination,true);
    xmlhttp.send();
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
                        <a class="nav-link" href="userhome.html" id="navbarlinks">Home <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color: #C7C5F4; font-weight: 700;">
                            About Us
                        </a>
                        <div class="dropdown-menu" style="border-radius: 30px;" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="aboutservices.html" id="navbarddlinks">Our Services</a>
                            <div class="dropdown-divider" id="dropdown-dividers"></div>
                            <a class="dropdown-item" href="aboutgoal.html" id="navbarddlinks">Our Goals</a>
                            <div class="dropdown-divider" id="dropdown-dividers"></div>
                            <a class="dropdown-item" href="aboutacheive.html" id="navbarddlinks">Acheivements</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html" id="navbarlinks">Contact Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color: #C7C5F4; font-weight: 700;">
                            Flights
                        </a>
                        <div class="dropdown-menu" style="border-radius: 30px;" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="allflights.html" id="navbarddlinks">View All Flights</a>
                            <div class="dropdown-divider" id="dropdown-dividers"></div>
                            <a class="dropdown-item" href="bookticket.html" id="navbarddlinks">Book Your Ticket</a>
                        </div>
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
                    <a class="dropdown-item" href="login.html" id="navbarddlinks">Login</a>
                    <div class="dropdown-divider" id="dropdown-dividers"></div>
                    <a class="dropdown-item" href="signup.html" id="navbarddlinks">Sign Up</a>

                </div>
            </div>


        </nav>

    </div>

    <div class="container-fluid mt-4" style="border-radius: 18px;">
        <center>
            <h2 style="color: #5955aa;font-weight: 700;">
                Book Your Ticket
            </h2>

            <div class="table-responsive">
                <form action="../php/additem.php" method="POST" enctype="multipart/form-data" >
                    <table style="width: 100%; ">
                        <tr>
                            <td style="text-align: right; padding-right: 5%;padding-left: 2%;">
                                <div class="login__field">
                                    <i class="login__icon fa fa-user"></i>
                                    <input type="text" class="login__input" name="fname" id="fname" placeholder="First Name">
                                </div>
                            </td>
                            <td>
                                <div class="login__field">
                                    <i class="login__icon fa fa-user"></i>
                                    <input type="text" class="login__input" name="lname" id="lname" placeholder="Last Name">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: right; padding-right: 5%;padding-left: 2%;">
                                <div class="login__field">
                                    <i class="login__icon fa fa-venus-mars"></i>
                                    <select class="login__input genderselecttext" name="gender" id="gender" style="color: #7875B5;">
                                        <option selected disabled>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="login__field">
                                    <i class="login__icon fa fa-user"></i>
                                    <input type="text" class="login__input" name="cnic" id="cnic" placeholder="CNIC">
                                </div>
                            </td>
                        </tr>

                        <tr>
			<td style="text-align: right; padding-right: 5%;padding-left: 2%;">
				<div class="login__field">
					<i class="login__icon fa fa-plane"></i>
					<select class="login__input genderselecttext" onchange="updateDestination(this.value); updateDate();" name="departure" id="departure" style="color: #7875B5;">
						<option selected disabled>---Departure---</option>
						<?php
						require("../php/conn.php");

						$q = 'SELECT DISTINCT Departure FROM flight';
						$result = mysqli_query($connection, $q);
						while ($rows = mysqli_fetch_assoc($result)) { ?>
							<option value="<?php echo $rows['Departure'] ?>"><?php echo $rows['Departure'] ?></option>
						<?php }?>
						
					</select>
				</div>
			</td>
			<td>
				<div class="login__field">
					<i class="login__icon fa fa-plane"></i>
					<select class="login__input genderselecttext" onchange="updateFare(); updateDate();" name="destination" id="destination" style="color: #7875B5;">
						<option selected disabled>---Destination---</option>
					</select>
				</div>
			</td>
		</tr>

                        <tr>
                            <td style="text-align: right; padding-right: 5%;padding-left: 2%;">
                                <div class="login__field">
                                    <i class="login__icon fa fa-user"></i>
                                    <input type="text" class="login__input" name="passport" id="passport" placeholder="Passport Number">
                                </div>
                            </td>
                            <td>
                                <div class="login__field">
                                    <i class="login__icon fa fa-user"></i>
                                    <input type="number" class="login__input" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: right; padding-right: 5%;padding-left: 2%;">
                            <div class="login__field">
                                <i class="login__icon fa fa-plane"></i>
                                <select class="login__input genderselecttext" name="date" id="date" style="color: #7875B5;">
                                    <option selected disabled>---Dates---</option>
                                </select>
                            </div>
                            </td>
                            <td>
                                <div class="login__field">
                                    <i class="login__icon fa fa-ticket"></i>
                                    <input type="number" class="login__input" name="fare" id="fare" style="color: #7875B5;" disabled>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: right; padding-right: 5%;padding-left: 2%;">
                                <div class="login__field">
                                    <i class="login__icon fa fa-book"></i>
                                    <input type="file" class="login__input " accept=".jpg, .jpeg, ,.png" value="" name="pImg" id="pImg" style="color: #7875B5;">
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center; padding-right: 5%;padding-left: 2%;">
                                <button class="button buttonsubmits" type="submit" id="submit" class="submit">
                                    <span class="button__text">Book Now</span>
                                    <i class="button__icon fa fa-chevron-right" style="text-align: right;"></i>
                                </button>
                            </td>
                            
                        </tr>



                    </table>
                </form>

                

            </div>

        </center>

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