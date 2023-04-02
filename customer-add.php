<?php
    include("config/connectdb.php");

    $customer_name = $_POST["customer_name"];       // รับค่า customer_name จากแอพหน้า register
    $customer_lname = $_POST["customer_lname"];     // รับค่า customer_lname จากแอพหน้า register
    $username = $_POST["username"];           // รับค่า username จากแอพหน้า register
    $password = $_POST["password"];           // รับค่า password จากแอพหน้า register

    $customer_id = GetMaxId("customer", "customer_id");
    $sql = "
        INSERT INTO customer (
            customer_id,
            customer_name,
            customer_lname,
            username,
            password
        ) VALUES (
            '$customer_id',
            '$customer_name',
            '$customer_lname',
            '$username',
            '$password'
        )
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