<?php
include("../shared/connection.php");
$companyQuery;
if ($_POST["companyId"]) {
    $value = $_POST["companyId"];
    $companyQuery = "AND  	company_id = '$value'";
}

$sql = "SELECT * FROM company WHERE  	company_enabled=1 $companyQuery  ORDER BY  	company_id DESC ";

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
