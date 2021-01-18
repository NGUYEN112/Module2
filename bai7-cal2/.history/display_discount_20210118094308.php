<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Price = $_POST['price'];
        $Discount = $_POST['discount'];
        $Result = $Price * $Discount / 100;
        $Result1 = $Price - $Result;
        echo 
    }
    ?>