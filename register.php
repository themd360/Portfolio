<?php
include 'includes/db.php';

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users(fullname,email,password)
              VALUES('$fullname','$email','$password')";

    mysqli_query($conn, $query);

    header("Location: login.php");
}
?>

<form method="POST">

    <input type="text" name="fullname" placeholder="Full Name">

    <input type="email" name="email" placeholder="Email">

    <input type="password" name="password" placeholder="Password">

    <button name="register">Register</button>

</form>