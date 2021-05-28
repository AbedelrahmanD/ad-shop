<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_commerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "SELECT * FROM product WHERE product_enabled=1 $idQuery $categoryQuery $companyQuery  ORDER BY  	product_id DESC  $limitQuery";
// $result = $conn->query($sql);
// while ($row = $result->fetch_assoc()) {
//     $path = "../upload/products/" . $row["product_id"];
//     //create path
//     mkdir($path);
// }
