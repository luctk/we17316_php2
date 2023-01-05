<?php
//$a=10;
//$b="llll"; //string
//$c=false;//bolean
//echo $a.$b;
//$mang=[10,9,5,6];
//echo "<br>";
////;lấy ra phần tử 5
//echo $mang[2];
//mảng liên hợp key=>value
$manglh = ["a" => 10, "b" => 9, "c" => 7];
// echo $manglh["c"]; //7
// echo $manglh["a"];
// echo $manglh['b'];
//yêu cầu tạo ra 1 bảng gồm các dòng hiển thị tên màu bằng tiếng việt và mỗi 1 dòng in ra màu tương ứng với key đã được khai báo
$color = ["red" => "màu đỏ", "green" => "màu xanh lá", "blue" => "màu xanh dương"];
// TẠO 1 MẢNG LIÊN HỢP GỒM KEY LẦN LƯỢT gồm các key lần lượt masv,tensv,tuoi
//hiển thị ra thông tin bảng thep chiêu ngang
//nếu tuổi>=18 tô màu đỏ
// mếu tuổi<=18 tô màu xanh dươngư
$tt = ["masv" => "a111", "tensv" => "tkl", "tuoi" => 20];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>key</td>
            <td>value</td>
        </tr>
        <?php foreach ($manglh as $key => $value) { ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $value ?></td>
            </tr>
        <?php } ?>
    </table>
    <table border="1">
        <?php foreach ($color as $key => $value) { ?>
            <tr style="background-color: <?php echo $key; ?>">
                <td><?php echo $value; ?></td>
            </tr>
        <?php } ?>

    </table>
    <table border="1">
        <tr>
            <td>
                <?php foreach ($tt as $key => $value) {
                    $mau = "";
                    if ($key == "tuoi") {
                        $mau = $value >= 18 ? "bgcolor='red'" : "bgcolor='blue'";
                    } ?>

            <td><?php echo $mau; ?>><?php echo $value; ?></td>


        <?php } ?>
        </tr>
        </td>
        </tr>
    </table>


</body>

</html>