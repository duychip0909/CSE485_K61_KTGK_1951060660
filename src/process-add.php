<?php

if(isset($_POST['sbmAdd'])) {
    $name = $_POST['pName'];
    $lname = $_POST['plName'];
    $dob = $_POST['pDOB'];
    $gender = $_POST['pGen'];
    $phone = $_POST['pPN'];
    $email = $_POST['pMail'];
    $height = $_POST['pHeight'];
    $weight = $_POST['pWeight'];
    $blood = $_POST['pBT'];
    $created = $_POST['pCreated'];
    $modified = $_POST['pModi'];
}

// kết nối tới server sql

include 'config.php';

//2. truy vấn dữ liệu
$sql_2 = "INSERT INTO patient (firstname, lastname, dateofbirth, gender, mobile, email, height, weight, blood_type, created_on, modified_on) 
VALUES ('$name','$lname','$dob','$gender','$phone','$email','$email','$height','$weight','$blood','$created','$modified')";

echo $sql_2;

if ($result_2 > 0) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Lỗi";
}

mysqli_close($conn);
?>