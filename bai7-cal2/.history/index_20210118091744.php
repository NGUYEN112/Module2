<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="Product Description">
        <input type="number" name="price" placeholder="List Price">
        <input type="number" name="discount" placeholder="Discount Percent">
        <input type="submit" value="Calculate Discount">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    }
    ?>
</body>
</html>