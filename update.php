<?php
    $conn = mysqli_connect("localhost", "root", "", "db_vote");
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $ID = $_REQUEST["ID"];
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

    $sql = "UPDATE data SET `prefix`='$prefix',`name`='$name',`surname`='$surname',`idcard`='$idcard',`birthday`='$birthday',
        `hNumber`='$hNumber',`moo`='$moo',`alley`='$alley',`road`='$road',`parish`='$parish',`district`='$district',`province`='$province',
        `zip`='$zip',`nPhone`='$nPhone',`community`='$community',`vocal_id_1`='$vocal_id_1',`vocal_name_1`='$vocal_name_1',`vocal_id_2`='$vocal_id_2',
        `vocal_name_2`='$vocal_name_2',`vocal_id_3`='$vocal_id_3',`vocal_name_3`='$vocal_name_3' WHERE `id`='$ID'";

    $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . $mysqli->error);
    mysqli_close($conn);
    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('แก้ไขข้อมูลสำเร็จ');";
        echo "window.location = 'showdata.php'; ";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
