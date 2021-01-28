<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiển thị thông báo nếu nhập số không hợp lệ</title>
</head>

<body>
    <form method="post">
        <input type="number" name="x">
        <input type="number" name="y">
        <input type="submit" value="Cal">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $x = $_POST['x'];
        $y = $_POST['y'];
        function cal($x, $y)
        {
            try {
                if (($x == "" && $y == "") || ($y == 0)) {
                    throw new Exception("Không thể thực hiện phép tính vì không nhập số hoặc số không hợp lệ");
                }
            } catch (Exception $ex) {
                return $ex->getMessage();
            }
        }
    }
    ?>
</body>

</html>