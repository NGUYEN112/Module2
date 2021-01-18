<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>SIMPLE CALCULATOR</h1>
    <form method="post">
        <fieldset style="width: 400px;">
            <legend>Calculator</legend>
            <table>
                <div>
                    <tr>
                        <td>First operand :</td>
                        <td><input type="number" name="operand"></td>
                    </tr>
                    <tr>
                        <td>Operator :</td>
                        <td><select name="operator">
                                <option value="addition">Addition</option>
                                <option value="subtraction">Subtraction</option>
                                <option value="multiple">Multiple</option>
                                <option value="division">Division</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Second operand :</td>
                        <td><input type="number" name="operand2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Calculator"></td>
                    </tr>
                </div>
            </table>
    </form>
    </fieldset>
    <h2>RESULT :</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $operand = $_POST['operand'];
        $operator = $_POST['operator'];
        $operand2 = $_POST['operand2'];

        function calculator($operand, $operator, $operand2,)
        {   
            try {
                if ($operand == "" && $operand2 == "") {
                    throw new Exception("Không thể thực hiện phép tính nếu không nhập số");
                }
            $result = 0;
            switch ($operator) {
                case "addition":
                    $result =  $operand + $operand2;
                    break;
                case "subtraction":
                    $result =  $operand - $operand2;
                    break;
                case "multiple":
                    $result =  $operand * $operand2;
                    break;
                case "division":
                    try {
                        if ($operand2 == 0) {
                            throw new Exception("Không thể thực hiện phép chia cho 0");
                        }
                        $result =  $operand / $operand2;
                    } catch (Exception $e) {
                        return $e->getMessage();
                    }
                    break;
                default:
                    "không thực hiện được";
            }
            return $result;
            
        }catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
        function opera($operator)
        {
            switch ($operator) {
                case "addition":
                    return " + ";
                case "subtraction":
                    return " - ";
                case "division":
                    return " / ";
                case "multiple":
                    return " * ";
            }
            return;
        }
        $ope = opera($operator);
        $result = calculator($operand, $operator, $operand2);
        echo $operand . opera($operator) . $operand2 . " = " . $result;
    }
    ?>
</body>

</html>