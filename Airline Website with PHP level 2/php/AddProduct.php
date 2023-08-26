<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Grocery Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
</head>

<body>
    <div class="card1">
        <nav class="navbar navbar-expand-lg p-2">
            <a href="AdminHome.php" class="navbar-brand">Company Name</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="NavLabel">
                <div class="offcanvas-header bgg-green card1">
                    <h5 class="offcanvas-title" id="NavLabel">Company Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="AdminHome.php"><span class="bi-house-door"></span>
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="AddProduct.php"><span class="bi-plus-square"></span> Add
                                New Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="OrderList.php"><span class="bi-clipboard-check"></span>
                                View Orders</a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link navmenu" href="logout.php"><span class="bi-arrow-right-square"></span> Log
                                Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <h1 class="text-center">Add Product</h1>
    <div class="row justify-content-center container-fluid wrapper">
        <div class="col-lg-6 card1">
            <form class="form p-3" action="additem.php" method="POST" autocomplete="off">
                <?php
                if (isset($_GET['PMessage'])) {
                    echo '<div class="px-5 py-2">
                        <span style="cursor:default" class="container-fluid text-danger">' . $_GET['PMessage'] . '</span>
                        </div>';
                } ?>
                <?php
                if (isset($_GET['SMessage'])) {
                    echo '<div class="px-5 py-2">
                        <span style="cursor:default" class="container-fluid text-danger">' . $_GET['SMessage'] . '</span>
                        </div>';
                } ?>
                <div class="p-2">
                    <label for="pName"><strong>Product Name </strong></label>
                    <input class="form-control" type="text" name="pName" id="pName">
                </div>
                <div class="p-2">
                    <label for="pdes"><strong>Product Description </strong></label>
                    <input class="form-control" type="text" name="pdes" id="pdes">
                </div>
                <div class="p-2">
                    <label><strong>Product Category </strong></label>
                    <select name="pCategory" class="form-select">
                        <option value="none" selected disabled>--Select Category--</option>
                        <?php
                        require("connection.php");
                        session_start();
                        $q = 'SELECT * FROM category';
                        $result = mysqli_query($link, $q);
                        while ($rows = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $rows['ID'] ?>"><?php echo $rows['Name'] ?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="p-2">
                    <label for="pPrice"><strong>Product Price </strong></label>
                    <input class="form-control" type="text" name="pPrice" id="pPrice">
                </div>
                <div class="p-2">
                    <label for="pQty"><strong>Product Quantity </strong></label>
                    <input class="form-control" type="text" name="pQty" id="pQty">
                </div>
                <div class="p-2">
                    <label for="pImg"><strong>Product Image </strong></label>
                    <input class="form-control" type="file" name="pImg" id="pImg">
                </div>
                <div class="pt-2 pb-5">
                    <input class="btn logbtn float-end" type="submit" value="Add Product">
                </div>
            </form>
        </div>
    </div>

    <footer class="text-lg-start text-white bg-black">
        <div class="container p-4">
            <div class="row mt-4">
                <div class="col-lg-4 col-md-4 text-center">
                    <h5 class="text-capitalize">Company Name</h5>
                    <div class="container-fluid">
                        <a class="fspan nav-link"><i class="bi-facebook"></i></a>
                        <a class="fspan nav-link"><i class="bi-twitter"></i></a>
                        <a class="fspan nav-link"><i class="bi-instagram"></i></a>
                        <a class="fspan nav-link"><i class="bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 text-center">
                    <h5 class="text-capitalize">Contact Info</h5>
                    <ul class="nav-item">
                        <li class="nav-link"><a class="fottera" href="#">Contact: +92 312 3456789</a></li>
                        <li class="nav-link"><a class="fottera" href="#">Email: companyname@gmail.com</a></li>
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