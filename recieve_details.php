<?php
    require 'config.php';

    $query = "SELECT * FROM patient_test";
    $results = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <td>Name</td>
            <td>Birthday</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Email</td>
            <td>Test Date</td>
            <td>Test Time</td>
            <td>Test Type</td>
            <td>Test Instructions</td>
            <td>Duration of Test</td>
            <td>Pre-Appointment Requirements</td>
            <td>Physician Referral</td>
        </tr>
        <tr>
           <?php
            while($row = mysqli_fetch_assoc($results))
            {
            ?>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['dob'] ?></td>
                <td><?php echo $row['contact_no'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['t_date'] ?></td>
                <td><?php echo $row['t_time'] ?></td>
                <td><?php echo $row['t_type'] ?></td>
                <td><?php echo $row['t_instructions'] ?></td>
                <td><?php echo $row['dot'] ?></td>
                <td><?php echo $row['pa_req'] ?></td>
                <td><?php echo $row['referral'] ?></td>
                <!-- <td><a href="#">Edit</a></td>
                <td><a href="#">Delete</a></td> -->

            </tr>
        <?php
            }
           ?>
        
    </table>
</body>
</html>