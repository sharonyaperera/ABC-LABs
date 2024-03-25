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
    <title>Test Appointments - Doctor</title>
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
          <a href="index-doctor.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Home Page</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <li>
          <a href="test-book-doc.php"  class="active">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Test Appointments</span>
          </a>
        </li>
      <!--  <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Test Results</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-user"></i>
            <span class="links_name">Doctor Details</span>
          </a>
        </li> -->
        <li>
          <a href="#">
            <i class="bx bx-message"></i>
            <span class="links_name">Patient Queries</span>
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
            <div class="title">Test Appointments</div> 
            <div class="box-form">
                <form class="" action="" method="post">
                    <input type="text" name="fname" id="fname" placeholder="Full Name" required value="">
                    <br><br>
                    <input type="text" name="contact_no" id="contact_no" placeholder="Contact No" required value="">
                    <br><br>
                    <input type="text" name="nic" id="nic" placeholder="NIC" required value="">
                    <br><br>
                    <input type="text" name="address" id="address" placeholder="Address" required value="">
                    <br><br>
                    <input type="text" name="email" class="email" placeholder="Email" required value="">
                    <br><br>
                    <input type="date" name="date" class="date" placeholder="Date" required value="">
                    <br><br>
                    <input type="text" name="test_type" id="test_type" placeholder="Test Type" required value="">
                    <br><br>
                    <button type="submit" name="submit">Submit</button>       
                </form>
            </div> 
          </div>
          
        </div>
      </div>
    </section>

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