<?php
include("../shared/connection.php");

$idQuery;
$categoryQuery;
$companyQuery;
$limitQuery;
$discountQuery;
$colorQuery;
$notIdQuery;
$searchQuery;
$typeQuery;
if (isset($_POST["productType"])) {
    $value = $_POST["productType"];
    $typeQuery = "AND product_type_id = '$value'";
}
if (isset($_POST["productId"])) {
    $value = $_POST["productId"];
    $idQuery = "AND product_id= '$value'";
}
if (isset($_POST["productColor"])) {
    $value = $_POST["productColor"];
    $colorQuery = "AND FIND_IN_SET ('$value',productColorsId)";
}
if (isset($_POST["categoryId"])) {
    $value = $_POST["categoryId"];
    $categoryQuery = "AND  	product_category_id = '$value'";
}
if (isset($_POST["companyId"])) {
    $value = $_POST["companyId"];
    $companyQuery = "AND company_id= '$value'";
}
if (isset($_POST["discount"])) {

    $discountQuery = "AND  	product_price_discount > 0";
}
if (isset($_POST["limit"])) {
    $value = $_POST["limit"];
    $limitQuery = "LIMIT   $value";
}

if (isset($_POST["notId"])) {
    $value = $_POST["notId"];
    $notIdQuery = "AND product_id!= '$value'";
}

if (isset($_POST["search"])) {
    $value = $_POST["search"];
    $searchQuery = "AND ( 	product_name  like '%$value%' OR product_description like '%$value%')";
}
$sql = "SELECT * FROM product WHERE product_enabled=1 $typeQuery $idQuery $categoryQuery $companyQuery $colorQuery $discountQuery $notIdQuery $searchQuery ORDER BY  	product_id DESC  $limitQuery";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = array();
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $imagesArray = array();
        $colorsArray = array();
        //get images
        $path = "../upload/products/" . $row["product_id"];
        $images = scandir($path);
        for ($i = 2; $i < count($images); $i++) {
            $imagesArray[] = "back_end/upload/products/" . $row["product_id"] . "/" . $images[$i];
        }
        $row["images"] = $imagesArray;

        $colors = $row["productColorsId"];
        $getColorsNames = "SELECT * FROM `productcolors` where FIND_IN_SET (productcolors.productColorsId,'$colors') ";

        $colorsRows = $conn->query($getColorsNames);
        while ($colorRow = $colorsRows->fetch_assoc()) {
            $colorsArray[] = $colorRow;
        }
        $row["colors"] = $colorsArray;
        $response[] = $row;
    }
    echo json_encode($response);
} else {
    echo json_encode([]);
}
