<?php
include("../shared/connection.php");

$categoryQuery;


if (isset($_POST["categoryId"])) {
    $value = $_POST["categoryId"];
    $categoryQuery = "AND  	product_category_id = '$value'";
}

$sql = "SELECT * FROM product_category WHERE  	product_category_enabled=1 $categoryQuery  ORDER BY  	product_category_id DESC ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = array();
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    echo json_encode($response);
} else {
    echo json_encode([]);
}
