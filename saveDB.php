<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAVE</title>
    <link rel="stylesheet" href="dist\css\bootstrap.min.css" />
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_vote");
    // $conn = mysqli_connect("sql6.freesqldatabase.com", "sql6523649", "lI4P283a7F", "sql6523649");
    // $conn = mysqli_connect("localhost", "id19657126_admin", "6>X*9Td7l|?0v?RC", "id19657126_db_vote");
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    // คำนำหน้า
    $prefix = $_REQUEST["prefix"];
    // ชื่อ
    $name = $_REQUEST["name"];
    // นามสกุล
    $surname = $_REQUEST["surname"];
    // เลขบัตรประชาชน
    $idcard = $_REQUEST["idcard"];
    // วัน/เดือน/ปีเกิด
    $birthday = $_REQUEST["birthday"];
    //บ้านเลขที่
    $hNumber = $_REQUEST["hNumber"];
    // หมู่
    $moo = $_REQUEST["moo"];
    // ซอย
    $alley = $_REQUEST["alley"];
    // ถนน
    $road = $_REQUEST["road"];
    // ตำบล
    $parish = $_REQUEST["parish"];
    // อำเภอ
    $district = $_REQUEST["district"];
    // จังหวัด
    $province = $_REQUEST["province"];
    // รหัสไปรษณีย์
    $zip = $_REQUEST["zip"];
    // เบอร์โทร
    $nPhone = $_REQUEST["nPhone"];
    // ชุมชน/เขต
    $community = $_REQUEST["community"];
    // รหัสแกนนำ 1
    $vocal_id_1 = $_REQUEST["vocal_id_1"];
    // ชื่อแกนนำ 1
    $vocal_name_1 = $_REQUEST["vocal_name_1"];
    // รหัสแกนนำ 2
    $vocal_id_2 = $_REQUEST["vocal_id_2"];
    // ชื่อแกนนำ 2
    $vocal_name_2 = $_REQUEST["vocal_name_2"];
    // รหัสแกนนำ 3
    $vocal_id_3 = $_REQUEST["vocal_id_3"];
    // ชื่อแกนนำ 3
    $vocal_name_3 = $_REQUEST["vocal_name_3"];


    // เช็คคนซ้ำจาก เลขบัตรประชาชน
    $check = "SELECT Idcard FROM data  WHERE Idcard = '$idcard' ";
    $result1 = mysqli_query($conn, $check) or die($mysqli->error);
    $num = mysqli_num_rows($result1);
    if ($num > 0) {
        echo "<script>";
        echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
        echo "window.history.back();";
        echo "</script>";
    } else {
        $sql = "INSERT INTO data (`prefix`, `name`, `surname`, `idcard`, `birthday`, `hNumber`, `moo`, `alley`, `road`, `parish`, `district`, `province`, `zip`, `nPhone`, `community`, `vocal_id_1`, `vocal_name_1`, `vocal_id_2`, `vocal_name_2`, `vocal_id_3`, `vocal_name_3`)
                          VALUES ('$prefix','$name','$surname','$idcard','$birthday','$hNumber','$moo','$alley','$road','$parish','$district','$province','$zip','$nPhone','$community','$vocal_id_1','$vocal_name_1','$vocal_id_2','$vocal_name_2','$vocal_id_3','$vocal_name_3')";

        $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . $mysqli->error);
    }
    mysqli_close($conn);
    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลสำเร็จ');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
    // Close connection
    // mysqli_close($conn);
    ?>
</body>

</html>