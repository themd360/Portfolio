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

$query = "SELECT * FROM posts ORDER BY id DESC";

$result = mysqli_query($conn, $query);

while($post = mysqli_fetch_assoc($result)){

?>

<h2>
    <?php echo $post['title']; ?>
</h2>

<img src="admin/uploads/<?php echo $post['image']; ?>" width="300">

<p>
    <?php echo substr($post['content'],0,150); ?>
</p>

<a href="article.php?slug=<?php echo $post['slug']; ?>">
Read More
</a>

<?php } ?>