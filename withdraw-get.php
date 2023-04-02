<?php
    include("config/connectdb.php");

    $customer_id = $_POST["customer_id"];

    $sql = "
        SELECT 
            widthdraw.*,
            product.product_name
        FROM widthdraw
            INNER join product on product.product_id=widthdraw.product_id
        WHERE customer_id='$customer_id'
        ORDER BY widthdraw.widthdraw_id DESC
        ;
    ";
    $data = [];
    $result = $conn->query($sql);
    while( $row=$result->fetch_assoc() ) {
        $data[] = $row;
    }
    echo json_encode([
        "status"=>"ok",
        "data"=>$data
    ]);