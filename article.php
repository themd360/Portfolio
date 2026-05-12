<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<h1>My Blog</h1>

<?php
include 'includes/db.php';

$slug = $_GET['slug'];

$query = "SELECT * FROM posts WHERE slug='$slug'";

$result = mysqli_query($conn, $query);

$post = mysqli_fetch_assoc($result);
?>

<h1><?php echo $post['title']; ?></h1>

<img src="admin/uploads/<?php echo $post['image']; ?>" width="500">

<p><?php echo $post['content']; ?></p>

<iframe width="560" height="315"
src="<?php echo $post['video_link']; ?>"
frameborder="0"
allowfullscreen>
</iframe>