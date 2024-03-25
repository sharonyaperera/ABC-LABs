<?php
require 'config.php'; 

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $age =  $_POST["age"];
    $gender =  $_POST["gender"];
    $blood_type =  $_POST["blood_type"];
    $contact_no =  $_POST["contact_no"];
    $address =  $_POST["address"]; 
    $nic =  $_POST["nic"];
    $email =  $_POST["email"];
    $t_date =  $_POST["t_date"];
    $t_time =  $_POST["t_time"];
    $t_type =  $_POST["t_type"];
    $t_instructions =  $_POST["t_instructions"];
    $dot =  $_POST["dot"];
    $pa_req =  $_POST["pa_req"];
    $referral =  $_POST["referral"];

    $duplicate = mysqli_query($conn, "SELECT * FROM patient_test WHERE fname = '$fname' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
    } 
    else {
        
      $query = "INSERT INTO patient_test (fname, age, gender, blood_type, contact_no, address, nic, email, t_date, t_time, t_type, t_instructions, dot, pa_req, referral)
      VALUES ('$fname', '$age', '$gender', '$blood_type', '$contact_no', '$address', '$nic', '$email', '$t_date', '$t_time', '$t_type', '$t_instructions', '$dot', '$pa_req', '$referral')";

        mysqli_query($conn, $query);
        echo
        "<script> alert('Patient Data Sent Successfully !!'); </script>";
    
    } 
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Appointments - Admin - ABC LABs</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div class="sidebar">
      <div class="logo-details">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
        </div>
      </nav>
        <span class="logo_name">ABC Labortaries</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index-admin.php" >
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Home Page</span>
          </a>
        </li>
        <li>
          <a href="doc-reg.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Doctor Registration</span>
          </a>
        </li>
        <li>
          <a href="test-admin.php" class="active">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Patient Test Details</span>
          </a>
        </li>
        <li>
          <a href="test-results-admin.php">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Patient Test Results</span>
          </a>
        </li>
        <li>
          <a href="admin-doc-details">
            <i class="bx bx-user"></i>
            <span class="links_name">Doctor Details</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>

    <section class="home-section">

    <div class="home-content">
        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Patient Test Appointments</div> 
            <div class="box-form">
                <form action="" method="post">
                <label for="fname">Full Name</label>
                    <input type="text" name="fname" id="fname" required value="">
                    <br>
                    <label for="age">Age</label>
                    <input type="text" name="age" class="age" required value="">
                    <br>
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" class="gender" required value="">
                    <br>
                    <label for="blood_type">Blood Type</label>
                    <input type="text" name="blood_type" class="blood_type" required value="">
                    <br>
                    <label for="contact_no">Contact No</label>
                    <input type="text" name="contact_no" id="contact_no"  required value="">
                    <br>
                    <label for="address">NIC</label>
                    <input type="text" name="address" id="address"  required value="">
                    <br>
                    <label for="nic">Address</label>
                    <input type="text" name="nic" id="nic"  required value="">
                    <br>
                    <label for="email">Email</label>
                    <input type="email" name="email" class="email"  required value="">
                    <br>
                    <label for="t_date">Appointment Date</label>
                    <input type="date" name="t_date" class="date"  required value="">
                    <br>
                    <label for="t_time">Appointment Time</label>
                    <input type="time" name="t_time" class="time" required value="">
                    <br>
                    <label for="t_type">Test Name</label>
                    <input type="text" name="t_type" id="t_type" required value="">
                    <br>
                    <label for="t_instructions">Test Instructions</label>
                    <input type="text" name="t_instructions" id="t_instructions" required value="">
                    <br>
                    <label for="dot">Duration of Test</label>
                    <input type="text" name="dot" id="dot" required value="">
                    <br>
                    <label for="pa_req">Pre-Appointment Requirements</label>
                    <input type="text" name="pa_req" id="pa_req" required value="">
                    <br>
                    <br>
                    <label for="referral">Physician Referral</label>
                    <input type="text" id="referral" name="referral" required>
                   
                    <br><br><br><br>
                    <button type="submit" name="submit">Submit</button>       
                </form>
            </div>
          </div>
        </div>
      
    </div>

    <form action="phpmail.php" method="post">
    <input type="text" name="fname" id="fname" placeholder="Full Name">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="text" name="subject" id="subject" placeholder="Subject">
    <textarea name="body" id="body" placeholder="Body"></textarea>
    <button type="submit" name="send">Submit</button>
</form>


    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
</body>
</html>