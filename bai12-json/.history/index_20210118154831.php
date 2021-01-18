<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí người dùng</title>
</head>

<body>
<h1>FORM ĐĂNG KÍ NGƯỜI DÙNG</h1>
    <form method="post">
    <Fieldset style="width : 400px">
    <legend>FORM</legend>
        <table>
            <tr>
                <td>Tên thường dùng : </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input name="email" type="text"></td>
            </tr>
            <tr>
                <td>Điện thoại : </td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Đăng kí"></td>
            </tr>
        </table>
        </Fieldset>
    </form>
<?php 
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       try {
           if ($name = "" && $email= "" && $phone = "") {
               throw new Exception("Nhập thiếu thông tin");
           }
       }catch (Exception $e){
            $error =  $e->getMessage();
            echo $error;
       }
       if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
        //    echo "Nhập sai định dạng email";
       }
   }
?>
</body>
</html>