<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
 <input type="number" name="number" value="nhập vào một số">;
 <input type="submit" value="Đọc số">
 </form>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        switch($number) {
            case 0: 
                echo : "zero";
            case 1: 
                echo : "zero";
            case 2: 
                echo : "zero";
            case 3: 
                echo : "zero";
            case 0: 
                echo : "zero";
            case 1: 
                echo : "zero";
            case 2: 
                echo : "zero";
            case 3: 
                echo : "zero";
                
        }
 ?>
</body>
</html>