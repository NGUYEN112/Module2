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
                                <option value="multiple">Multive</option>
                                <option value="dimession">Dimession</option>
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
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $operand = $_POST['operand'];
        $operator = $_POST['operator'];
        $operand2 = $_POST['operand2'];

        function calculator($operand, $operator, $operand2,)
        {
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
                case "dimession":
                    $result =  $operand / $operand2;
                    break;
                default:
                    "không thực hiện được";
            }
            return $result;
        }
        $result = calculator($operand, $operator, $operand2);
        echo "Result : " . $result;
    }
    ?>
</body>

</html>