<fieldset style="width:400px">
    <legend>Thêm nhân sự</legend>
    <form method="post">
        <table>
            <tr>
                <td>Họ :</td>
                <td><input type="text" name="surname"></td>
            </tr>
            <tr>
                <td>Tên :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Ngày sinh :</td>
                <td><input type="date" name="dateOB"></td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Vị trí công việc : </td>
                <td><input type="text" name="jobposition"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</fieldset>
<?php
include_once "Employee/Employee.php";
include_once "EmployeeManager/EmployeeManager.php";
