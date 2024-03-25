<?php 
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}

$alertMessage = "";

if(isset($_POST["submit"])){
   
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE email = '$email' OR password = '$password'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["nic"] = $row["nic"];
            header("Location: index.php");
            exit();
        }
        else{
            $alertMessage = "Wrong Password";
        }
    } 
    else {
        $alertMessage = "User Not Registered";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ABC LABs</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="box-form">

    <div class="left">
		<div class="overlay">
		<h1>Welcome Back!</h1>
		<p>Where precision meets care. Fast, accurate results for your health needs.</p>
		</div>
	</div>

    <div class="right">
    <img src="logo.png" alt="" style="align-items:center;">
    <p>Don't have an account? <a href="signin.php">Creat Your Account</a> it takes less than a minute</p>
    <form action="" method="post">
        <br>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <br>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <br><br><br><br>
        <button type="submit" name="submit">Login</button>
    </form>
    <?php 
    if(!empty($alertMessage)): 
    ?>
    <script>alert('<?php echo $alertMessage; ?>');</script>
    <?php endif; ?>
    </div>
</div>    
</body>
</html>

