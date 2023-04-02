<?php
    include("config/connectdb.php");
    
    $widthdraw_id = $_POST["widthdraw_id"];
    $customer_id = $_POST["customer_id"];
    $widthdraw_date = $_POST["widthdraw_date"];   // รับค่า username จากแอพหน้า login
    $widthdraw_time = $_POST["widthdraw_time"];
    $product_id = $_POST["product_id"];
    $amount = $_POST["amount"];   // รับค่า password จากแอพหน้า login
    
    $sql = "
        UPDATE widthdraw SET
            customer_id='$customer_id',
            widthdraw_date='$widthdraw_date $widthdraw_time',
            product_id='$product_id',
            amount='$amount'
        WHERE widthdraw_id='$widthdraw_id'
    ";
    $result = $conn->query($sql);
    if ($result) {
        echo json_encode([
            "status"=>"ok"
        ]);
    } else {
        echo json_encode([
            "status"=>"no"
        ]);
    }