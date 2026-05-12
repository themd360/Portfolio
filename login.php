<?php
session_start();

include 'includes/db.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $query);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user['password'])){

        $_SESSION['admin'] = $user['fullname'];

        header("Location: admin/dashboard.php");

    } else {

        echo "Invalid Login Details";

    }
}
?>

<form method="POST">

    <input type="email" name="email">

    <input type="password" name="password">

    <button name="login">Login</button>

</form>