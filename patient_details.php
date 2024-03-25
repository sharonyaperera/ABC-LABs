<?php
require "config.php";
if(!empty($_SESSION["id"])){
}
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $dob =  $_POST["dob"];
        $contact_no =  $_POST["contact_no"];
        $address =  $_POST["address"];
        $email =  $_POST["email"];
        $t_date =  $_POST["t_date"];
        $t_time =  $_POST["t_time"];
        $t_type =  $_POST["t_type"];
        $t_instructions =  $_POST["t_instructions"];
        $dot =  $_POST["dot"];
        $pa_req =  $_POST["pa_req"];
        $referral =  $_POST["referral"];
    
        $query = "INSERT INTO patient_test VALUES
                ( '$fname', '$dob', '$contact_no', '$address', '$email', '$t_date',
                             '$t_time', '$t_type', '$t_instructions', '$dot', '$pa_req',
                              '$referral')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Patient Details Sent !!'); </script>";
        header("Location: patient_details.php");
        exit;
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
            <h3>Patient details</h3>
            <input type="text" name="fname" id="fname" placeholder="Full Name" required value="">
            <br>
            <input type="date" name="dob" id="dob" placeholder="Birthday" required value="">
            <br>
            <input type="number" name="contact_no" id="contact_no" placeholder="Contact No" required value="">
            <br>
            <input type="text" name="address" id="address" placeholder="Address" required value="">
            <br>
            <input type="email" name="email" id="email" placeholder="Email" required value="">
            <br>
            <br>
            <h3>appointment details</h3>
            <br>
            <input type="date" name="t_date" id="t_date" placeholder="Test Date" required value="">
            <br>
            <input type="time" name="t_time" id="t_time" placeholder="Test Time" required value="">
            <br>
            <br>
            <h3>appointment details</h3>
            <br>
            <input type="text" name="t_type" id="t_type" placeholder="Test Type" required value="">
            <br>
            <input type="text" name="t_instructions" id="t_instructions" placeholder="Test Instructions" required value="">
            <br>
            <input type="text" name="dot" id="dot" placeholder="Duration of Test" required value="">
            <br>
            <input type="text" name="pa_req" id="pa_req" placeholder="Pre-Appointment Requirements" required value="">
            <br>
            <br>
            <label for="referral">Physician Referral</label>
            <input type="text" id="referral" name="referral" required>
            <br>
            <br>
            <h2>Notes</h2>
            <h3>For more information contact: ses u put the number</h3>
            <br><br><br><br>
            <button type="submit" name="submit">Submit</button>       
        </form>
    </div>        
</body>
</html>