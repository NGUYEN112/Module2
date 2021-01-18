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
        // if ($length == 1) {
        //     smallnum($number);
        // }
        function smallnum($number)
        {
            switch ($number) {
                case 0:
                    echo "Zero";
                    break;
                case 1:
                    echo "One";
                    break;
                case 2:
                    echo "Two";
                    break;
                case 3:
                    echo "Three";
                    break;
                case 4:
                    echo "Four";
                    break;
                case 5:
                    echo "Five";
                    break;
                case 6:
                    echo "Six";
                    break;
                case 7:
                    echo "Seven";
                    break;
                case 8:
                    echo "Eight";
                    break;
                case 9:
                    echo "Nine";
                    break;
                default:
                    echo "out of ability";
                    break;
            }
            return;
        }
        smallnum($number);
    }
    ?>
</body>

</html>