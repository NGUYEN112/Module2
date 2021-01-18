<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="number" name="number" value="enter number">;
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
                    echo "Zero";
                case 1:
                    echo "One";
                case 2:
                    echo "Two";
                case 3:
                    echo "Three";
                case 4:
                    echo "Four";
                case 5:
                    echo "Five";
                case 6:
                    echo "Six";
                case 7:
                    echo "Seven";
                    break;
                case 8:
                    return "Eight";
                case 9:
                    return "Nine";
                default:
                    echo "out of ability";
            }
            return;
        }
        if ($length == 1) {
            smallnum($number);
        }elseif ($length == 2){

        }
    }
    ?>
</body>

</html>