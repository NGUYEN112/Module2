<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="number" name="number">;
        <input type="submit" value="Convert">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $length = strlen($number);

        function smallnum($number)
        {
            switch ($number) {
                case 0:
                    return "Zero";
                case 1:
                    return "One";
                case 2:
                    return "Two";
                case 3:
                    return "Three";
                case 4:
                    return "Four";
                case 5:
                    return "Five";
                case 6:
                    return "Six";
                case 7:
                    return "Seven";
                case 8:
                    return "Eight";
                case 9:
                    return "Nine";
            }
            return;
        }
        $result = smallnum($number);
        echo $result;
        if ($length == 1) {
            echo smallnum($number);
        }elseif ($length== 2){
             switch ($number[0]) {
                 case 1:
                    switch($number[1]){

                    }
             }
            } 
        } 
    ?>
</body>

</html>