<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Từ: <input id="from" type="text" name="from" placeholder="yyyyy/mm/dd" />
        Đến: <input id="to" type="text" name="to" placeholder="yyyy/mm/dd" />
        <input type="submit" id="submit" value="Lọc" />
    </form>
    <?php
    $customer_list = array(
        "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
        "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
        "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
        "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
        "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
    );
    function searchByDate($customers, $from_date, $to_date)
    {
        if (empty($from_date) && empty($to_date)) {
            return $customers;
        }
        $filtered_customers = [];
        foreach ($customers as $customer) {
            if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
                continue;
            if (!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
                continue;
            $filtered_customers[] = $customer;
        }
        return $filtered_customers;
    }
    ?>
</body>

</html>