<?php
include("../shared/connection.php");

$categoryQuery;

$sql = "SELECT * FROM product_type  ";

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
