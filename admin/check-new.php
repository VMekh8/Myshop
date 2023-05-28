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
$categoryID = $_POST['category'];
$price = $_POST['price'];


mysqli_query($conn, "INSERT INTO `products` (`id`, `title`, `content`, `image`, `price`, `categoryID`) VALUES (NULL, '$title', '$content', '$image', '$price', '$categoryID')");
header('Location: index.php');