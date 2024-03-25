<?php
    require 'config.php';

    $query = "SELECT * FROM patient_test";
    $results = mysqli_query($conn, $query);
    $results1 = mysqli_query($conn, $query);
    $results2 = mysqli_query($conn, $query);
    $results3 = mysqli_query($conn, $query);
    $results4 = mysqli_query($conn, $query);
    $results5 = mysqli_query($conn, $query);
    $results6 = mysqli_query($conn, $query);
    $results7 = mysqli_query($conn, $query);
    $results8 = mysqli_query($conn, $query);
    $results9 = mysqli_query($conn, $query);
    $results10 = mysqli_query($conn, $query);
    $results11 = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Appointment Details - ABC LABs</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/index-2.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
    .home-content .sales-boxes .recent-sales .box-form .table-details-2 {
      font-family: Arial, Helvetica, sans-serif;
      table-layout: fixed;
      border-collapse: collapse;
      width: 100%;
    }
  
    .home-content .sales-boxes .recent-sales .box-form .table-details-2 td{
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }
    
    .home-content .sales-boxes .recent-sales .box-form .table-details-2 th{
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    .home-content .sales-boxes .recent-sales .box-form .table-details-2 tr:nth-child(even){background-color: #f2f2f2;}

    .home-content .sales-boxes .recent-sales .box-form .table-details-2 th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      color: black;
    }  
    </style>

</head>
<body>
  <!-- <h1>Welcome <?php echo $row["full_name"];  ?></h1> -->
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
          <a href="index-patient.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Home Page</span>
          </a>
        </li>
        <li>
          <a href="appointments.php">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <li>
          <a href="test-appointment-details.php" class="active">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Test Appointments</span>
          </a>
        </li>
        <li>
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
        </li>
        <li>
          <a href="#">
            <i class="bx bx-message"></i>
            <span class="links_name">Queries</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
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
            <div class="title">Test Appointment Details</div>  
            <div class="box-form">
                <table class="table-details-2">
                    <tr>
                        <th>Name</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results))
                        {
                        ?>
                        <td><?php echo $row['fname'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Birthday</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results1))
                        {
                        ?>
                        
                        <td><?php echo $row['dob'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results2))
                        {
                        ?>
                        <td><?php echo $row['contact_no'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results3))
                        {
                        ?>
                        <td><?php echo $row['address'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results4))
                        {
                        ?>
                        <td><?php echo $row['email'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Test Date</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results5))
                        {
                        ?>
                        <td><?php echo $row['t_date'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Test Time</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results6))
                        {
                        ?>
                        <td><?php echo $row['t_time'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Test Type</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results7))
                        {
                        ?>
                        <td><?php echo $row['t_type'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Test Instructions</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results8))
                        {
                        ?>
                        <td><?php echo $row['t_instructions'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Duration of Test</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results9))
                        {
                        ?>
                        <td><?php echo $row['dot'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Pre-Appointment Requirements</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results10))
                        {
                        ?>
                        <td><?php echo $row['pa_req'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    <tr>
                        <th>Physician Referral</th>
                        <?php
                        while($row = mysqli_fetch_assoc($results11))
                        {
                        ?>
                        <td><?php echo $row['referral'] ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                    
                        <!-- <td><a href="#">Edit</a></td>
                        <td><a href="#">Delete</a></td> -->
                    </tr>
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