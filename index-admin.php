<?php
    require 'config.php';

    $query = "SELECT * FROM appointments";
    $results = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index-Admin - ABC LABs</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/index-2.css" />
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
          <a href="index-admin.php" class="active">
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
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Appointments</div>
              <div class="number">400</div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Canceled Appointments</div>
              <div class="number">38</div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Test Appointments</div>
              <div class="number">15</div>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Completed Test Appointments</div>
              <div class="number">11</div>
            </div>
          </div>
        </div>

        <div class="sales-boxes">
          <div class="recent-sales box">
            <div class="title">Appointments</div>  
            <br><br>
            <div class="box-form">
              <table class="table-details">
                <tr>
                  <th>Name</th>
                  <th>NIC</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Specialization</th>
                  <th>Doctor</th>
                </tr>
                <tr>
                <?php
                  while($row = mysqli_fetch_assoc($results))
                  {
                  ?>
                  <td><?php echo $row['fname'] ?></td>
                  <td><?php echo $row['nic'] ?></td>
                  <td><?php echo $row['contact_no'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['specialty'] ?></td>
                  <td><?php echo $row['doc'] ?></td>
                  <!-- <td><a href="#">Edit</a></td>
                  <td><a href="#">Delete</a></td> -->

                </tr>
                <?php
                    }
                  ?>
        
    </table>
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