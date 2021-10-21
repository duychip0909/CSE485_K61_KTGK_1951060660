<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        include 'header.php';
    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã bệnh nhân</th>
                <th scope="col">Tên</th>
                <th scope="col">Họ đệm</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Chiều cao</th>
                <th scope="col">Cân nặng</th>
                <th scope="col">Nhóm máu</th>
                <th scope="col">Ngày lập sổ</th>
                <th scope="col">Ngày cập nhật</th>
            </tr>
        </thead>
        <tbody>
    <?php
    include 'config.php';


    $sql = "SELECT * FROM patient";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<th scope="row">' . $row['patientid'] . '</th>';
            echo '<td>' . $row['firstname'] . '</td>';
            echo '<td>' . $row['lastname'] . '</td>';
            echo '<td>' . $row['dateofbirth'] . '</td>';
            echo '<td>' . $row['gender'] . '</td>';
            echo '<td>' . $row['mobile'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['height'] . '</td>';
            echo '<td>' . $row['weight'] . '</td>';
            echo '<td>' . $row['blood_type'] . '</td>';
            echo '<td>' . $row['created_on'] . '</td>';
            echo '<td>' . $row['modified_on'] . '</td>';
            echo '</tr>';
        }
    }

    mysqli_close($conn);
    ?>





    
</body>

<footer>
        <a href="/Project/src/form-add.php">Thêm bệnh nhân</a>
        <a href="">Xóa bệnh nhân</a>
</footer>
</html>