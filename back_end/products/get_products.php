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
$limitPerPage;
if (isset($_POST["productType"])) {
    $value = $_POST["productType"];
    if ($value . "" != "0")
        $typeQuery = "AND product_type_id = '$value'";
}
if (isset($_POST["productId"])) {
    $value = $_POST["productId"];
    $idQuery = "AND product_id= '$value'";
}
if (isset($_POST["productColor"])) {
    $value = $_POST["productColor"];
    if ($value . "" != "0")
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
if (isset($_POST["limitPerPage"])) {
    $value = $_POST["limitPerPage"];
    $limitPerPage = "LIMIT $value";
}




$sql = "SELECT * FROM product WHERE product_enabled=1 $typeQuery $idQuery $categoryQuery $companyQuery $colorQuery $discountQuery $notIdQuery $searchQuery ORDER BY  	product_id DESC $limitPerPage  $limitQuery";
$result = $conn->query($sql);
$response = array();
$products = array();
if ($result->num_rows > 0) {

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
        //$row["totalRows"] = $totalRows;
        $products[] = $row;
    }




    $response["products"] = $products;
    $totalRows = 0;
    $sql = "SELECT count(*) as total FROM product WHERE product_enabled=1 $typeQuery $idQuery $categoryQuery $companyQuery $colorQuery $discountQuery $notIdQuery $searchQuery ORDER BY  	product_id DESC ";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $totalRows = $row["total"];
    }
    $response["totalRows"] = $totalRows;
    echo json_encode($response);
} else {
    echo json_encode([]);
}
