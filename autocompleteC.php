<?php
include 'connect.php';
$conn = OpenCon();
function products($conn , $term){   
    $query = "SELECT DISTINCT vocal_name_3 FROM `data`WHERE vocal_name_3 LIKE '%".$term."%' ORDER BY vocal_name_3 ASC";
    $result = mysqli_query($conn, $query);  
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $data;   
}

if (isset($_GET['term'])) {
    $products = products($conn, $_GET['term']);
    $getProducts = array();
    foreach($products as $product){
        $getProducts[] = $product['vocal_name_3'];
    }
    echo json_encode($getProducts);
}