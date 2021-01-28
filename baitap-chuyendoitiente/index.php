<fieldset style="width:800px">
    <legend>Chuyển đổi tiền tệ!</legend>
    <form method="post">
        <input type="number" name="value">
        <select name="from">
            <option value="VND">Việt Nam đồng</option>
            <option value="USD">Đô-la Mỹ</option>
            <option value="HM">Tài sản của Hades</option>
        </select>
        <select name="to">
            <option value="VND">Việt Nam đồng</option>
            <option value="USD">Đô-la Mỹ</option>
            <option value="HM">Tài sản của Hades</option>
        </select>
        <input type="submit" value="Conv">
    </form>
</fieldset>
<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $value = $_POST['value'];

    function Conv($value, $from, $to)
    {
        switch ($from) {
            case 'VND':
                if ($to == 'USD') {
                    return $value / 23000;
                } elseif ($to == 'HM') {
                    return $value / 20000;
                } else {
                    return $value;
                }
            case 'USD':
                if ($to == 'VND') {
                    return $value * 23000;
                } elseif ($to == 'HM') {
                    return $value * 1.15;
                } else {
                    return $value;
                }
            case 'HM':
                if ($to == 'VND') {
                    return $value * 20000;
                } elseif ($to == 'USD') {
                    return $value / 1.15;
                } else {
                    return $value;
                }
        }
    }
    $result = Conv($value, $from, $to);
    echo $value.$from. " chuyển đổi sang ".$to. " = " .$result;
}
