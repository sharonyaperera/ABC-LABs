<?php
require "config.php";
if(!empty($_SESSION["id"])){
}
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $contact_no =  $_POST["contact_no"];
        $nic =  $_POST["nic"];
        $address =  $_POST["address"];
        $email =  $_POST["email"];
        $date =  $_POST["date"];
        $test_type =  $_POST["test_type"];
        $duplicate = mysqli_query($conn, "SELECT * FROM test_appoint_doc WHERE fname = '$fname' OR contact_no = '$contact_no'");
        
            $query = "INSERT INTO test_appoint_doc VALUES
                    ( '$fname', '$contact_no', '$nic', '$address', '$email', '$date',
                             '$test_type')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Test Appointment Sent !!'); </script>";
        
        } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="box-form">
    <div class="left">
        <form class="" action="" method="post">
            <input type="text" name="fname" id="fname" placeholder="Full Name" required value="">
            <br>
            <input type="number" name="contact_no" id="contact_no" placeholder="Contact No" required value="">
            <br>
            <input type="text" name="nic" id="nic" placeholder="NIC" required value="">
            <br>
            <input type="text" name="address" id="address" placeholder="Address" required value="">
            <br>
            <input type="email" name="email" id="email" placeholder="Email" required value="">
            <br>
            <input type="date" name="date" id="date" placeholder="Date" required value="">
            <br>
            <input type="text" name="test_type" id="test_type" placeholder="Test Type" required value="">
            <br><br><br><br>
            <button type="submit" name="submit">Submit</button>       
        </form>
    </div>        
</body>
</html>