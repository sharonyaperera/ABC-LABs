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
    <title>Patient Queries - ABC LABs</title>
</head>
<body>
    <table>
        <tr>
            <td>Name</td>
            <td>NIC</td>
            <td>Phone</td>
            <td>Date</td>
            <td>Specialization</td>
            <td>Doctor</td>
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
</body>
</html>