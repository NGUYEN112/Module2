<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function enterNumber($message) {
        $number = 0;
        do {
            $number = Number(prompt(`${message}:`));
        }
        while (isNaN($number) || !Number.isSafeInteger($number) || $number < 0);
        return $number;
    }
    enterNumber("Nhập số cần đọc")
    ?>
</body>
</html>