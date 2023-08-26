<?php
// require("conn.php");
// if ($_POST['fname'] != null && $_POST['lname'] != null && !empty($_POST['gender']) != null && !empty($_POST['departure']) && !empty($_POST['destination']) && $_POST['cnic'] != null && $_POST['passport'] != null && $_POST['phone'] != null && $_POST['date'] != null && $_POST['fare'] != null && $_POST['pImg'] != null) {
//     $fname=$_POST["fname"];
//     $lname=$_POST["lname"];
//     $gender=$_POST["gender"];
//     $cnic=$_POST["cnic"];
//     $departure=$_POST["departure"];
//     $destination=$_POST["destination"];
//     $passport=$_POST["passport"];
//     $phone=$_POST["phone"];
//     $date=$_POST["date"];
//     $fare=$_POST["fare"];
//     $img = $_POST['pImg'];
//     $sql = "INSERT INTO bookticket VALUES(null,'$fname','$lname','$gender','$cnic','$departure','$destination','$passport','$phone','$date','$fare','$img')";
//     $bool = mysqli_query($connection, $sql);
//     if ($bool) {
//         $PMessage = urlencode("New Product Added Successfully");
//         header("../userEnd/bookticket.php?PMessage=" . $PMessage);
//     } else {
//         // $SMessage = urlencode("New Product Addition Failed. Please Chcek your credentials and try again");
//         // header("Location:../userEnd/bookticket.php?SMessage=" . $SMessage);
//         header("Location:../userEnd/userview.php?SMessage=" . $SMessage);
//     }
// }
// else{
//     $SMessage = urlencode("Please Fill In All the Credentails");
//     header("Location:../userEnd/bookticket.php?SMessage=".$SMessage);
// }
require("conn.php");
if ($_POST['fname'] != null && $_POST['lname'] != null && !empty($_POST['gender']) != null && !empty($_POST['departure']) && !empty($_POST['destination']) && $_POST['cnic'] != null && $_POST['passport'] != null && $_POST['phone'] != null && $_POST['date'] != null && $_POST['fare'] != null) {
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["gender"];
    $cnic=$_POST["cnic"];
    $departure=$_POST["departure"];
    $destination=$_POST["destination"];
    $passport=$_POST["passport"];
    $phone=$_POST["phone"];
    $date=$_POST["date"];
    $fare=$_POST["fare"];
    
    // Check if an image was uploaded
    if (isset($_FILES["pImg"])) {
        $imgName = $_FILES["pImg"]["name"];
        $imgTmp = $_FILES["pImg"]["tmp_name"];
        $imgType = $_FILES["pImg"]["type"];
        
        // Check if the uploaded file is an image
        $allowedTypes = array("image/jpeg", "image/png", "image/gif","image/gif");
        if (in_array($imgType, $allowedTypes)) {
            $imgPath = "../uploads/" . $imgName;
            
            // Move the uploaded file to the "uploads" folder
            move_uploaded_file($imgTmp, $imgPath);
            
            // Insert the image path into the database
            $sql = "INSERT INTO bookticket VALUES(null,'$fname','$lname','$gender','$cnic','$departure','$destination','$passport','$phone','$date','$fare','$imgPath')";
            $bool = mysqli_query($connection, $sql);
            if ($bool) {
                $PMessage = urlencode("New Product Added Successfully");
                header("Location:../userEnd/bookticket.php?PMessage=" . $PMessage);
            } else {
                $SMessage = urlencode("New Product Addition Failed. Please Check your credentials and try again");
                header("Location:../userEnd/bookticket.php?SMessage=" . $SMessage);
            }
        } else {
            $SMessage = urlencode("Invalid file type. Only JPEG, PNG, and GIF files are allowed.");
            header("Location:../userEnd/bookticket.php?SMessage=".$SMessage);
        }
    } else {
        $SMessage = urlencode("Please select an image to upload.");
        header("Location:../userEnd/bookticket.php?SMessage=".$SMessage);
    }
}
else{
    $SMessage = urlencode("Please Fill In All the Credentials");
    header("Location:../userEnd/bookticket.php?SMessage=".$SMessage);
}

?>