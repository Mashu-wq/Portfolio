<?php
require('db.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $email = mysqli_real_escape_string($db, $email);
    // $password = mysqli_real_escape_string($db, $password);
    $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $run = mysqli_query($db, $query);
    $data = mysqli_fetch_array($run);
    if (count($data) > 0) {
        $_SESSION['isUserLoggedIn'] = true;
        $_SESSION['emailId'] = $_POST['email'];

        echo "<script>window.location.href= 'admin.php';</script>";
    } else {
        echo "<script>alert('Incorrect email id or password !')</script>";
    }

    // if ($run && mysqli_num_rows($run) > 0) {
    //     session_start();
    //     $_SESSION['isUserLoggedIn'] = true;
    //     $_SESSION['emailId'] = $email;
    //     header("Location: admin.php");
    //     exit;
    // } else {
    //     echo "<script>alert('Incorrect Email or Password!')</script>";
    // }
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!-- <input type="checkbox" id="show">
        <label for="show" class="show-btn">View Form</label> -->

    <div class="container">
        <!-- <label for="show" class="close-btn" title="close">×</label> -->
        <h1>Welcome</h1>
        <form method="post">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>

            <!-- <a href="#">Forgot Password?</a> -->
            <button name="submit">Submit</button>
            <!-- <div class="link">Not a member? <a href="#">Sigup here</a></div> -->

        </form>
    </div>
</body>

</html>
</span>