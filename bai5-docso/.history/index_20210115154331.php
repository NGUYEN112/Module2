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
                case 10:
                    return "Ten";
            }
            return;
        }
        function mediumNum($number)
        {
            switch ($number) {
                case 11:
                    return "Eleven";
                case 12:
                    return "Twelve";
                case 13:
                    return "Thrteen";
                case 14:
                    return "Fourteen";
                case 15:
                    return "Fifteen";
                case 16:
                    return "Sixteen";
                case 17:
                    return "Seventeen";
                case 18:
                    return "Eighteen";
                case 19:
                    return "Nineteen";
            }
            return;
        }
        function hightnum($number)
        {
            switch ($number) {
                case 20:
                    return "Two";
                case 30:
                    return "Three";
                case 40:
                    return "Four";
                case 50:
                    return "Five";
                case 60:
                    return "Six";
                case 70:
                    return "Seven";
                case 80:
                    return "Eight";
                case 90:
                    return "Nine";
            }
            return;
        }
        smallnum($number);
    } 
    ?>
</body>

</html>