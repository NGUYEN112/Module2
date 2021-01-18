<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tìm số nhỏ nhất sd phương thức</title>
</head>
<body>
    <?php
    $array = [6,3,7,93,73,4,7,2];
    $min = $array[0];
    $index = 0;
    function minarr($array,$min) {
        for ($i = 1; $i<count($array) ;$i++ ) {
            if ($array[$i] < $min) {
                $min = $array[$i];
                $index = $i;
            }
        }
    }
    ?>
</body>
</html>