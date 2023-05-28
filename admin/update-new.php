<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = 'myShop';
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];
$category = $_POST['category'];
$price = $_POST['price'];
$id = $_POST['id'];

mysqli_query($conn, "UPDATE `products` SET `title` = '$title', `image` = '$image', `content` = '$content', `price` = '$price', `categoryID` = '$category' WHERE `products`.`id` = '$id'");
header('Location: index.php');

