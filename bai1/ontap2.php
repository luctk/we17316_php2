<?php
//hàm 
//có trả về - tái sử dụng cao hơn
//không trả về
function hienthi($a, $b, $c=10){
echo $a+$b+$c;
}
hienthi(8,9);
//dùng để sử dụng và gom code 
//tạo 1 hàm ko trả về hieent thị thị thông tin sinh vien gồm các tham số truyền vào
//ho ten, masv, namsinh, email, 
//hieenr thị ra tt sinh viên theo từng tham số truyền vào
//hoten-masv-tuoi-email
//tuoi=năm hiện tại -năm sinh
//get current year in php
function ttsv($hoten,$masv,$namsinh,$email){
echo $hoten;
echo $masv;
$year = date("Y"); 
echo $year; 
  echo $email;
}
ttsv("tkl","ph26068","2002","tkl@");
?>
