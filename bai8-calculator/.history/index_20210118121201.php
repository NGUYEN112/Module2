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
                    <td><select>
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
    <?php ?>
</body>

</html>