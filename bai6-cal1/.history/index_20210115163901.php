<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="number" name="amou" placeholder="Inventment Amount">-
    <input type="number" name="rate" placeholder="Yearly Interest Rate">-
    <input type="number" name="year" placeholder="Number of Years">-
    <input type="submit" value="Calculate">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Amount = $_POST["amou"];
            $Rate = $_POST["rate"];
            $Year = $_POST["year"];
            $result = $Amount + ($Amount*$Rate/100);
            for($i = 1; $i<= $Year;$i++){
                if($i = 1){
                    return;
                }else {
                    $result = $result + ($result * $Rate / 100);
                }
                return;
            }echo $result;
        }
    ?>
</body>
</html>