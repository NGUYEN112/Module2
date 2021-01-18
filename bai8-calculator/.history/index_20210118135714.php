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
                                <option value="multive">Multive</option>
                                <option value="dimession">Dimession</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Second operand :</td>
                        <td><input type="number" name="operand"></td>
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
    if ($_SERVER["REQUEST_METHOD"] == "posT") {
        $Operand = $_POST['operand'];
        $Operator = $_POST['operator'];
        $Operand2 = $_POST['operand2'];
        $Result = 0;
        function calculator($Operand, $Operator, $Operand2,$Result)
        {
            switch ($Operator) {
                case "addition":
                    return $Result = $Operand + $Operand2;
                default:
                    "không thực hiện được";
            }
            echo $Result;
            return $Result;
        }
        calculator($Operand, $Operator, $Operand2,$Result);
        echo "Result : " . $Result;
    }
    ?>
</body>

</html>