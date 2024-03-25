<?php
require "config.php";

    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $specialty =  $_POST["specialty"];
        $affiliation =  $_POST["affiliation"];
        $qualification =  $_POST["qualification"];
        $duplicate = mysqli_query($conn, "SELECT * FROM doc WHERE fname = '$fname' AND specialty = '$specialty'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Name and Email is Already Taken'); </script>";
        } 
        else {
            
            $query = "INSERT INTO doc VALUES
                    ( '$fname', '$specialty', '$affiliation', '$qualification')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registrated Successful !!'); </script>";
        
        } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Doctor Registration - ABC LABs</title>
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
          <a href="index-admin.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Home Page</span>
          </a>
        </li>
        <li>
          <a href="doc-reg.php" class="active">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Doctor Registration</span>
          </a>
        </li>
        <li>
          <a href="test-admin.php">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Patient Test Details</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Patient Test Results</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-user"></i>
            <span class="links_name">Doctor Details</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-message"></i>
            <span class="links_name">Pateint Queries</span>
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
            <div class="title">Doctor Registration</div>
                <div class="box-form">
                    <form class="" action="" method="post">
                      <label for="fname">Full Name</label>
                      <input type="text" name="fname" id="fname" required value="">
                            
                      <label for="fname">Specialty</label>
                      <input type="text" name="specialty" id="specialty" required value="">
                            
                      <label for="fname">Affiliations</label>
                      <input type="text" name="affiliation" id="affiliation" required value="">
                          
                      <label for="fname">Qualifications</label>
                      <input type="text" name="qualification" id="qualification" required value="">
                    <br><br>
                        
                      <button type="submit" name="submit">Register</button>   

                    </form>
                  </div>  
                </div>

            </div> 
          </div>




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