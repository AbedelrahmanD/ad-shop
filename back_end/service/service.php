<?php
include("../shared/connection.php");


$typeyQuery;
$limitQuery;
if ($_GET["type"]) {
    $value = $_GET["type"];
    $typeyQuery = "AND  	product_type.product_type_type like '%$value%'";
}
if ($_GET["limit"]) {
    $value = $_GET["limit"];
    $limitQuery = "LIMIT   $value";
}


$sql = "SELECT product_id FROM product,product_type WHERE product_enabled=1 and product.product_type_id =product_type.product_type_id  $typeyQuery  $limitQuery";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    $actual_link = "http://localhost/web_project/";
    $response = array();
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $imagesArray = array();
        $colorsArray = array();
        //get images
        $path = "../upload/products/" . $row["product_id"];
        $images = scandir($path);
        for ($i = 2; $i < count($images); $i++) {
            $imagesArray[] = $actual_link . "back_end/upload/products/" . $row["product_id"] . "/" . $images[$i];
        }

        $response[] = $imagesArray;
    }
    echo json_encode($response);
} else {
    echo json_encode([]);
}
