<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงาน</title>
    <link rel="stylesheet" href="css\style-report.css" />
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <style>
        @page land {
            size: A4 landscape;
        }

        .landscape {
            page: land;
        }

    </style>
</head>

<body class="landscape">
    <div class="book">
        <div class="page">
            <?php
            include 'connect.php';
            $conn = OpenCon();
            // $id = $_REQUEST["id"];
            // echo $id;
            if ($_POST["id"] == "A") {
                // echo $_POST["id"];
                // echo $_POST["prints"];

                if (!empty($_POST['prints'])) {
                    // include 'connect.php';
                    // $conn = OpenCon();
                    $prints = $_REQUEST["prints"];
                    // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                    if ($conn === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM `data` WHERE `vocal_name_1` = '$prints'";

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            // $names = '';
                            $counts = 0;
                            // echo "<h1 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h1>";
                            echo "<h1 class='center'>รายชื่อ</h1>";
                            echo "<table id='myTable' class='table table-bordered landscape '>";
                            echo "<thead>";
                            echo "<tr class='table-active landscape'>";
                            echo "<th class='center' scope='col'>ลำดับ</th>";
                            echo "<th class='center' scope='col'>แกนนำ A</th>";
                            echo "<th class='center' scope='col'>แกนนำ B</th>";
                            echo "<th class='center' scope='col'>แกนนำ C</th>";
                            echo "<th class='center' scope='col'>คำนำหน้า</th>";
                            echo "<th class='center' scope='col'>ชื่อ</th>";
                            echo "<th class='center' scope='col'>สกุล</th>";
                            echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                            // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                            // echo "<th class='center' scope='col'>ที่อยู่</th>";
                            echo "<th class='center' scope='col'>เบอร์โทร</th>";
                            echo "<th class='center' scope='col'>ชุมชน/เขต</th>";

                            echo "</tr>";
                            echo "</thead>";


                            while ($row = mysqli_fetch_array($result)) {
                                $counts++;
                                // $names = $row['community'];
                                if ($row['hNumber'] == null) {
                                    $adress = '';
                                } else {
                                    $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                                }
                                // echo "<h1 class='center'>รายชื่อ" . $names . "</h1>";
                                echo "<tr class='landscape'>";
                                echo "<td>" . $counts . "</td>";
                                echo "<td>" . $row['vocal_name_1'] . "</td>";
                                echo "<td>" . $row['vocal_name_2'] . "</td>";
                                echo "<td>" . $row['vocal_name_3'] . "</td>";
                                echo "<td>" . $row['prefix'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['surname'] . "</td>";
                                echo "<td>" . $row['idcard'] . "</td>";
                                // echo "<td>" . $row['birthday'] . "</td>";
                                // echo "<td>" . $adress . "</td>";
                                echo "<td>" . $row['nPhone'] . "</td>";
                                echo "<td>" . $row['community'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result);
                        } else {
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                }
            } else if ($_REQUEST["id"] == "B") {
                if (!empty($_POST['prints'])) {
                    $prints = $_REQUEST["prints"];
                    // include 'connect.php';
                    // $conn = OpenCon();
                    // $conn = mysqli_connect("localhost", "root", "", "db_vote");
                    if ($conn === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM `data` WHERE `vocal_name_2` = '$prints'";

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            // $names = '';
                            $counts = 0;
                            // echo "<h1 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h1>";
                            echo "<h1 class='center'>รายชื่อ</h1>";
                            echo "<table id='myTable' class='table table-bordered landscape '>";
                            echo "<thead>";
                            echo "<tr class='table-active  landscape'>";
                            echo "<th class='center' scope='col'>ลำดับ</th>";
                            echo "<th class='center' scope='col'>แกนนำ A</th>";
                            echo "<th class='center' scope='col'>แกนนำ B</th>";
                            echo "<th class='center' scope='col'>แกนนำ C</th>";
                            echo "<th class='center' scope='col'>คำนำหน้า</th>";
                            echo "<th class='center' scope='col'>ชื่อ</th>";
                            echo "<th class='center' scope='col'>สกุล</th>";
                            echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                            // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                            // echo "<th class='center' scope='col'>ที่อยู่</th>";
                            echo "<th class='center' scope='col'>เบอร์โทร</th>";
                            echo "<th class='center' scope='col'>ชุมชน/เขต</th>";

                            echo "</tr>";
                            echo "</thead>";


                            while ($row = mysqli_fetch_array($result)) {
                                $counts++;
                                // $names = $row['community'];
                                if ($row['hNumber'] == null) {
                                    $adress = '';
                                } else {
                                    $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                                }
                                // echo "<h1 class='center'>รายชื่อ" . $names . "</h1>";
                                echo "<tr class='landscape'>";
                                echo "<td>" . $counts . "</td>";
                                echo "<td>" . $row['vocal_name_1'] . "</td>";
                                echo "<td>" . $row['vocal_name_2'] . "</td>";
                                echo "<td>" . $row['vocal_name_3'] . "</td>";
                                echo "<td>" . $row['prefix'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['surname'] . "</td>";
                                echo "<td>" . $row['idcard'] . "</td>";
                                // echo "<td>" . $row['birthday'] . "</td>";
                                // echo "<td>" . $adress . "</td>";
                                echo "<td>" . $row['nPhone'] . "</td>";
                                echo "<td>" . $row['community'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result);
                        } else {
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                }
            } else if ($_REQUEST["id"] == "C") {
                if (!empty($_POST['prints'])) {
                    $prints = $_REQUEST["prints"];
                    if ($conn === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM `data` WHERE `vocal_name_3` = '$prints'";

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            // $names = '';
                            $counts = 0;
                            // echo "<h1 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h1>";
                            echo "<h1 class='center'>รายชื่อ</h1>";
                            echo "<table id='myTable' class='table table-bordered landscape '>";
                            echo "<thead>";
                            echo "<tr class='table-active  landscape'>";
                            echo "<th class='center' scope='col'>ลำดับ</th>";
                            echo "<th class='center' scope='col'>แกนนำ A</th>";
                            echo "<th class='center' scope='col'>แกนนำ B</th>";
                            echo "<th class='center' scope='col'>แกนนำ C</th>";
                            echo "<th class='center' scope='col'>คำนำหน้า</th>";
                            echo "<th class='center' scope='col'>ชื่อ</th>";
                            echo "<th class='center' scope='col'>สกุล</th>";
                            echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                            // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                            // echo "<th class='center' scope='col'>ที่อยู่</th>";
                            echo "<th class='center' scope='col'>เบอร์โทร</th>";
                            echo "<th class='center' scope='col'>ชุมชน/เขต</th>";

                            echo "</tr>";
                            echo "</thead>";


                            while ($row = mysqli_fetch_array($result)) {
                                $counts++;
                                // $names = $row['community'];
                                if ($row['hNumber'] == null) {
                                    $adress = '';
                                } else {
                                    $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                                }
                                // echo "<h1 class='center'>รายชื่อ" . $names . "</h1>";
                                echo "<tr class='landscape'>";
                                echo "<td>" . $counts . "</td>";
                                echo "<td>" . $row['vocal_name_1'] . "</td>";
                                echo "<td>" . $row['vocal_name_2'] . "</td>";
                                echo "<td>" . $row['vocal_name_3'] . "</td>";
                                echo "<td>" . $row['prefix'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['surname'] . "</td>";
                                echo "<td>" . $row['idcard'] . "</td>";
                                // echo "<td>" . $row['birthday'] . "</td>";
                                // echo "<td>" . $adress . "</td>";
                                echo "<td>" . $row['nPhone'] . "</td>";
                                echo "<td>" . $row['community'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result);
                        } else {
                            echo "No records matching your query were found.";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                }
            } else if ($_REQUEST["id"] == "All") {
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");
                // include 'connect.php';
                $conn = OpenCon();
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM `data`";

                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $names = '';
                        $counts = 0;
                        // echo "<h1 class='center'>รายชื่อ " . $prints . "</h1>";
                        echo "<h1 class='center'>รายชื่อ</h1>";
                        echo "<table id='myTable' class='table table-bordered landscape '>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        echo "<th class='center' scope='col'>ชื่อ</th>";
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                        // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        // echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }
                            // echo "<h1 class='center'>รายชื่อ" . $names . "</h1>";
                            echo "<tr class='landscape'>";
                            echo "<td>" . $counts . "</td>";
                            echo "<td>" . $row['vocal_name_1'] . "</td>";
                            echo "<td>" . $row['vocal_name_2'] . "</td>";
                            echo "<td>" . $row['vocal_name_3'] . "</td>";
                            echo "<td>" . $row['prefix'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['surname'] . "</td>";
                            echo "<td>" . $row['idcard'] . "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            echo "<td>" . $row['nPhone'] . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                        mysqli_free_result($result);
                    } else {
                        echo "ไม่มีข้อมูลใน DATABASE";
                        // echo "No records matching your query were found.";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            } else if ($_REQUEST["id"] == "allA") {
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM `data` WHERE vocal_name_1 != '' ORDER BY community ASC";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $names = '';
                        $counts = 0;
                        echo "<h1 class='center'>รายชื่อ</h1>";
                        echo "<table id='myTable' class='table table-bordered landscape '>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        // echo "<th class='center' scope='col'>แกนนำ B</th>";
                        // echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        echo "<th class='center' scope='col'>ชื่อ</th>";
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                        // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        // echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }
                            echo "<tr class='landscape'>";
                            echo "<td>" . $counts . "</td>";
                            echo "<td>" . $row['vocal_name_1'] . "</td>";
                            // echo "<td>" . $row['vocal_name_2'] . "</td>";
                            // echo "<td>" . $row['vocal_name_3'] . "</td>";
                            echo "<td>" . $row['prefix'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['surname'] . "</td>";
                            echo "<td>" . $row['idcard'] . "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            echo "<td>" . $row['nPhone'] . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "จำนวนA".$counts;
                        mysqli_free_result($result);
                        CloseCon($conn);
                    } else {
                        // echo "No records matching your query were found.";
                        echo "ไม่มีข้อมูลแกนนำ C ใน DATABASE";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            } else if ($_REQUEST["id"] == "allB") {
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                // $sql = "SELECT * FROM `data` ORDER BY community ASC";
                $sql = "SELECT * FROM `data` WHERE vocal_name_2 != '' ORDER BY community ASC";
                
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $names = '';
                        $counts = 0;
                        
                        echo "<h1 class='center'>รายชื่อ</h1>";
                        echo "<table id='myTable' class='table table-bordered landscape '>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        // echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        echo "<th class='center' scope='col'>ชื่อ</th>";
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                        // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        // echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            
                            $names = $row['community'];
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }
                            echo "<tr class='landscape'>";
                            echo "<td>" . $counts . "</td>";
                            echo "<td>" . $row['vocal_name_1'] . "</td>";
                            echo "<td>" . $row['vocal_name_2'] . "</td>";
                            // echo "<td>" . $row['vocal_name_3'] . "</td>";
                            echo "<td>" . $row['prefix'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['surname'] . "</td>";
                            echo "<td>" . $row['idcard'] . "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            echo "<td>" . $row['nPhone'] . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "จำนวนB".$counts;
                        mysqli_free_result($result);
                        CloseCon($conn);
                    } else {
                        // echo "No records matching your query were found.";
                        echo "ไม่มีข้อมูลแกนนำ B ใน DATABASE";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            } else if ($_REQUEST["id"] == "allC") {
                if(!empty($_POST['prints'])){
                    echo "NOT";
                }
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM `data` WHERE vocal_name_3 != '' ORDER BY community ASC";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $names = '';
                        $counts = 0;
                        echo "<h1 class='center'>รายชื่อ</h1>";
                        echo "<table id='myTable' class='table table-bordered landscape '>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        echo "<th class='center' scope='col'>ชื่อ</th>";
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>เลขบัตรประชาชน</th>";
                        // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        // echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }
                            echo "<tr class='landscape'>";
                            echo "<td>" . $counts . "</td>";
                            echo "<td>" . $row['vocal_name_1'] . "</td>";
                            echo "<td>" . $row['vocal_name_2'] . "</td>";
                            echo "<td>" . $row['vocal_name_3'] . "</td>";
                            echo "<td>" . $row['prefix'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['surname'] . "</td>";
                            echo "<td>" . $row['idcard'] . "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            echo "<td>" . $row['nPhone'] . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_free_result($result);
                        CloseCon($conn);
                    } else {
                        // echo "No records matching your query were found.";
                        echo "ไม่มีข้อมูลแกนนำ C ใน DATABASE";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            }
            ?>
        </div>
    </div>
</body>

</html>