<?php
require 'config.php'; 

if(!empty($_SESSION["id"])){
}
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $nic =  $_POST["nic"];
    $contact_no =  $_POST["contact_no"];
    $date =  $_POST["date"];
    $specialty =  $_POST["specialty"];
    $doc =  $_POST["doc"];

      $specialty_query = mysqli_query($conn, "SELECT * FROM doc WHERE id = $specialty");
      $specialty_row = mysqli_fetch_assoc($specialty_query);
      $specialty = $specialty_row['specialty'];

      $doc_query = mysqli_query($conn, "SELECT * FROM doc WHERE id = $doc");
      $doc_row = mysqli_fetch_assoc($doc_query);
      $doc = $doc_row['fname'];

      $duplicate = mysqli_query($conn, "SELECT * FROM appointments WHERE fname = '$fname' OR nic = '$nic'");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Name or NIC is Already Taken'); </script>";
    } 
    else {
        $query = "INSERT INTO appointments (fname, nic, contact_no, date, specialty, doc) VALUES ('$fname', '$nic', '$contact_no', '$date', '$specialty', '$doc')";
        mysqli_query($conn, $query);
        echo "<script> alert('Booking Successful !!'); </script>";
    } 
}

?>

</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - Patient - ABC LABs</title>
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
          <a href="index-patient.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Home Page</span>
          </a>
        </li>
        <li>
          <a href="appointments.php" class="active">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <li>
          <a href="test-appointment-details.php">
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
            <div class="title">Appointments</div>
            <br>
            <div class="box-form">
              <form class="" action="" method="POST">
                <input type="text" name="fname" id="fname" placeholder="Full Name" required value="">
                <br><br>
                <input type="text" name="nic" id="nic" placeholder="NIC" required value="">
                <br><br>
                <input type="text" name="contact_no" id="contact_no" placeholder="Contact No" required value="">
                <br><br>
                <input type="date" class="date" name="date" id="date" placeholder="date" required value="">
                <br><br>
                 
                <select onchange="fun(this.value);" name="specialty" id="specialty">
                <option class="option" value="">Specialization</option>
                  <?php
                  include('config.php');
                  $docs = mysqli_query($conn, "SELECT * FROM doc ");
                  while($c = mysqli_fetch_array($docs)){
                  ?>
                <option value="<?php echo $c['id'] ?>"><?php echo $c['specialty'] ?></option>
                <?php } ?>
                </select>
                <br><br>

                <select id="doc" name="doc"  required >
                <option value="">Select Your Preferred Doctor</option>
                  <?php
                    include('config.php');
                    $docs = mysqli_query($conn, "SELECT * FROM doc ");
                    while($c = mysqli_fetch_array($docs)){
                  ?>
                <option value="<?php echo $c['id'] ?>"><?php echo $c['fname'] ?></option>
                <?php } ?>
                </select>
                <br><br>
                <button type="submit" name="submit">Book Now</button>    
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