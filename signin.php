<?php
require "config.php";
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $age = $_POST["age"];
        $nic =  $_POST["nic"];
        $address =  $_POST["address"];
        $gender =  $_POST["gender"];
        $blood_type =  $_POST["blood_type"];
        $contact_no =  $_POST["contact_no"];
        $email =  $_POST["email"];
        $password =  $_POST["password"];
        $c_password =  $_POST["c_password"];
        $duplicate = mysqli_query($conn, "SELECT * FROM tbl_user WHERE full_name = '$fname' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Name or Email is Already Taken'); </script>";
        } 
        else {
            if($password == $c_password){
            $query = "INSERT INTO tbl_user VALUES
                    ( '$fname', '$age', '$nic', '$address', '$gender', '$blood_type',
                             '$contact_no', '$email', '$password', '$c_password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful !!'); </script>";
        
        } 
        else {
            echo
            "<script> alert('Password Do Not Match'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - ABC LABs</title>
    <link rel="stylesheet" href="./styles/signin.css">
</head>
<body>
<div class="box-form">
    <div class="left">
        <form class="" action="" method="post">
            <input type="text" name="fname" id="fname" placeholder="Full Name" required value="">
            <br>
            <input type="number" name="age" id="age" placeholder="Age" required value="">
            <br>
            <input type="text" name="nic" id="nic" placeholder="NIC" required value="">
            <br>
            <input type="text" name="address" id="address" placeholder="Address" required value="">
            <br>
            <input type="text" name="gender" id="gender" placeholder="Gender" required value="">
            <br>
            <input type="text" name="blood_type" id="blood_type" placeholder="Blood Type" required value="">
            <br>
            <input type="number" name="contact_no" id="contact_no" placeholder="Contact No" required value="">
            <br>
            <input type="email" name="email" id="email" placeholder="Email" required value="">
            <br>
            <input type="password" name="password" id="password" placeholder="Password" required value="">
            <br>
            <input type="password" name="c_password" id="c_password" placeholder="Confirm Password" required value="">
            <br><br><br><br>
            <button type="submit" name="submit">Register</button>       
        </form>
    </div>        

            <div class="right">
                <div class="overlay">
                <img src="./styles/logo2.png" alt="">
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <h2> ABC Labortaries</h2>
		            <p>Where precision meets care. Fast, accurate results for your health needs.</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
		            <span>
			        <p>Already have an account? <a href="login.php">Login</a> </p>
		            </span>
		        </div>
            </div>
        </form>
    </div>
</div>        
</body>
</html>