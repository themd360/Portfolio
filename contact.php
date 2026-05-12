<?php
include 'includes/db.php';

if(isset($_POST['send'])){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $subject = $_POST['subject'];

    $message = $_POST['message'];

    $query = "INSERT INTO messages
    (name,email,subject,message)

    VALUES

    ('$name','$email','$subject','$message')";

    mysqli_query($conn, $query);

    echo "Message Sent";
}
?>

<form method="POST">

    <input type="text" name="name">

    <input type="email" name="email">

    <input type="text" name="subject">

    <textarea name="message"></textarea>

    <button name="send">Send Message</button>

</form>