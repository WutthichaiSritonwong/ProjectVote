<?php
include 'connect.php';
$conn = OpenCon();
function products($conn , $term){   
    $query = "SELECT DISTINCT community FROM `data` WHERE community LIKE '%".$term."%' ORDER BY community ASC";
    $result = mysqli_query($conn, $query);  
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $data;   
}

if (isset($_GET['term'])) {
    $products = products($conn, $_GET['term']);
    $getProducts = array();
    foreach($products as $product){
        $getProducts[] = $product['community'];
    }
    echo json_encode($getProducts);
}