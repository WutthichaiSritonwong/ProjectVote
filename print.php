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
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
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
                    $sql = "SELECT * FROM `data` WHERE `community` = '$prints' "; //echo $sql;

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            // $names = '';
                            $counts = 0;
                            // echo "<h3 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h3>";
                            echo "<h3 class='center'>รายการข้อมูลแกนนำ A ชุมชน " . $prints . "</h3>";
                            echo "<table id='myTable' class='table table-bordered landscape '>";
                            echo "<thead>";
                            echo "<tr class='table-active  landscape'>";
                            echo "<th class='center' scope='col'>ลำดับ</th>";
                            //echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                            // echo "<th class='center' scope='col'>แกนนำ A</th>";
                            // echo "<th class='center' scope='col'>แกนนำ B</th>";
                            // echo "<th class='center' scope='col'>แกนนำ C</th>";
                            echo "<th class='center' scope='col'>ชื่อ - นามสกุล</th>";

                            // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                            // echo "<th class='center' scope='col'>ที่อยู่</th>";
                            echo "<th class='center' scope='col'>เบอร์โทร</th>";


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
                                // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                                echo "<tr class='landscape'>";
                                echo "<td align='center'>" . $counts . "</td>";
                                //echo "<td>" . $row['community'] . "</td>";
                                // echo "<td>" . $row['vocal_name_1'] . "</td>";
                                // echo "<td>" . $row['vocal_name_2'] . "</td>";
                                // echo "<td>" . $row['vocal_name_3'] . "</td>";
                                echo "<td>" . $row['prefix'] . "" . $row['name'] . "&nbsp;&nbsp;" . $row['surname'] . "</td>";


                                // echo "<td>" . $row['birthday'] . "</td>";
                                // echo "<td>" . $adress . "</td>";
                                echo "<td>" . $row['nPhone'] . "</td>";

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
                    $sql = "SELECT * FROM `data` WHERE `community` = '$prints' AND vocal_name_2 != ''"; //echo $sql;

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            // $names = '';
                            $counts = 0;
                            // echo "<h3 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h3>";
                            echo "<h3 class='center'>รายการข้อมูลแกนนำ B ชุมชน " . $prints . "</h3>";
                            echo "<table id='myTable' class='table table-bordered landscape '>";
                            echo "<thead>";
                            echo "<tr class='table-active  landscape'>";
                            echo "<th class='center' scope='col'>ลำดับ</th>";
                            //echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                            // echo "<th class='center' scope='col'>แกนนำ A</th>";
                            // echo "<th class='center' scope='col'>แกนนำ B</th>";
                            // echo "<th class='center' scope='col'>แกนนำ C</th>";
                            echo "<th class='center' scope='col'>ชื่อ - นามสกุล</th>";

                            // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                            // echo "<th class='center' scope='col'>ที่อยู่</th>";
                            echo "<th class='center' scope='col'>เบอร์โทร</th>";


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
                                // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                                echo "<tr class='landscape'>";
                                echo "<td align='center'>" . $counts . "</td>";
                                //echo "<td>" . $row['community'] . "</td>";
                                // echo "<td>" . $row['vocal_name_1'] . "</td>";
                                // echo "<td>" . $row['vocal_name_2'] . "</td>";
                                // echo "<td>" . $row['vocal_name_3'] . "</td>";
                                echo "<td>" . $row['prefix'] . "" . $row['name'] . "&nbsp;&nbsp;" . $row['surname'] . "</td>";


                                // echo "<td>" . $row['birthday'] . "</td>";
                                // echo "<td>" . $adress . "</td>";
                                echo "<td>" . $row['nPhone'] . "</td>";

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
                            // echo "<h3 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h3>";
                            echo "<h3 class='center'>รายการข้อมูลแกนนำ C " . $prints . "</h3>";
                            echo "<table id='myTable' class='table table-bordered landscape '>";
                            echo "<thead>";
                            echo "<tr class='table-active  landscape'>";
                            echo "<th class='center' scope='col'>ลำดับ</th>";
                            echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                            //echo "<th class='center' scope='col'>แกนนำ A</th>";
                            //echo "<th class='center' scope='col'>แกนนำ B</th>";
                            //echo "<th class='center' scope='col'>แกนนำ C</th>";
                            echo "<th class='center' scope='col'>คำนำหน้า</th>";
                            echo "<th class='center' scope='col'>ชื่อ</th>";
                            echo "<th class='center' scope='col'>สกุล</th>";

                            // echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                            // echo "<th class='center' scope='col'>ที่อยู่</th>";
                            echo "<th class='center' scope='col'>เบอร์โทร</th>";


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
                                // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                                echo "<tr class='landscape'>";
                                echo "<td align='center'>" . $counts . "</td>";
                                echo "<td>" . $row['community'] . "</td>";
                                //echo "<td>" . $row['vocal_name_1'] . "</td>";
                                //echo "<td>" . $row['vocal_name_2'] . "</td>";
                                //echo "<td>" . $row['vocal_name_3'] . "</td>";
                                echo "<td>" . $row['prefix'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['surname'] . "</td>";

                                // echo "<td>" . $row['birthday'] . "</td>";
                                // echo "<td>" . $adress . "</td>";
                                echo "<td>" . $row['nPhone'] . "</td>";

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
            } else if ($_REQUEST["id"] == "Commu") {
                if (!empty($_POST['prints'])) {
                    $prints = $_REQUEST["prints"];
                    if ($conn === false) {
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM `data` WHERE `community` = '$prints' ORDER BY community, vocal_name_2 ASC";  //echo $sql;
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            // $names = '';
                            $counts = 0;
                            // echo "<h3 class='center'>รายชื่อ " . $_REQUEST["id"] . "</h3>";
                            echo "<h3 class='center'>รายการข้อมูลชุมชน " . $prints . "</h3>";


                            //หา A
                            $qa = "SELECT vocal_name_1,nPhone FROM data WHERE community='$prints' GROUP BY vocal_name_1 ORDER BY vocal_name_1 ASC";
                            //echo $qa;
                            $res_a = mysqli_query($conn, $qa);
                            $i = 0;
                            echo "<div class='card-body'><ol><u><h6 class='text-primary'></h6></u>";
                            echo "<div class='card-body'><ol><u><h6 class='text-primary'>ทีมแกน A</h6></u>";
                            while ($a = mysqli_fetch_array($res_a)) {
                                $i++;
                                echo "<table width='100%'><tr><td width='280'><li>" . $a['vocal_name_1'] . "</li></td><td width='500'>" . $a['nPhone'] . "</td></tr></table>";

                                //หา B
                                $qb = "SELECT vocal_name_2, nPhone FROM data WHERE vocal_name_1='$a[vocal_name_1]' AND  vocal_name_2 <> '' 
                                GROUP BY vocal_name_2 ORDER BY vocal_name_2"; //echo $qb;
                                $res_b = mysqli_query($conn, $qb);
                                $count_b = mysqli_num_rows($res_b);
                                if ($count_b > 0) {
                                    echo "<u><h6 class='text-info'>ทีมแกน B</h6></u>";
                                }
                                echo "<ol>";
                                while ($b = mysqli_fetch_array($res_b)) {
                                    //echo "<li>".$b['vocal_name_2']. " &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;" .$b['nPhone']."</li>";
                                    echo "<table width='100%'><tr><td width='248'><li>" . $b['vocal_name_2'] . "</li></td><td width='500'>" . $b['nPhone'] . "</td></tr></table>";

                                    //หา C
                                    $qc = "SELECT vocal_name_3,nPhone FROM data WHERE vocal_name_2='$b[vocal_name_2]' AND  vocal_name_3 <> '' 
                            GROUP BY vocal_name_3 ORDER BY vocal_name_3"; //echo $qc;
                                    $res_c = mysqli_query($conn, $qc);
                                    $count_c = mysqli_num_rows($res_c);
                                    if ($count_c > 0) {
                                        echo "<u><h6 class='text-success'>ทีมแกน C</h6></u>";
                                    }
                                    echo "<ol>";
                                    while ($c = mysqli_fetch_array($res_c)) {
                                        //echo "<li>".$c['vocal_name_3']. " &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;" .$c['nPhone']."</li>";
                                        echo "<table width='100%'><tr><td width='215'><li>" . $c['vocal_name_3'] . "</li></td><td width='500'>" . $c['nPhone'] . "</td></tr></table>";
                                    }
                                    echo "</ol>";
                                }
                                echo "</ol>";
                            }


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
                //$sql = "SELECT * FROM `data` ORDER BY id ";
                $q_allA = "SELECT COUNT(id) AS c_i FROM data";
                $result = mysqli_query($conn, $q_allA);
                $count_n = mysqli_fetch_array($result);

                $sql = "SELECT community FROM `data` GROUP by community order by community ";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $count_i = mysqli_num_rows($result);
                        $names = '';
                        $counts = 0;
                        // echo "<h3 class='center'>รายชื่อ " . $prints . "</h3>";
                        echo "<h3 class='center'>รายชื่อทั้งหมด " . $count_i . " ชุมชน รวมจำนวน " . number_format($count_n['c_i'], 0) . " ราย</h3>";
                        echo "<table id='myTable' width='100%' border='1'>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape' height='50'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "<th class='center' scope='col'>ชื่อ - นามสกุล</th>";
                        /*
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        */
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            /*
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }*/
                            // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                            echo "<tr class='landscape'>";
                            echo "<td align='center'>" . $counts . "</td>";
                            echo "<td> &nbsp;&nbsp;" . $row['community'] . "</td>";
                            echo "<td>";
                            //$q = "SELECT * FROM data WHERE community='$row[community]'  ";
                            $q = "SELECT * FROM data WHERE community='$row[community]' ORDER BY community ASC";
                            $res = mysqli_query($conn, $q);
                            echo "<table border='0' width='100%'>";
                            $i = 0;
                            while ($array = mysqli_fetch_array($res)) {
                                $i++;

                                echo "<tr>";
                                echo "<td width='50%'>";
                                echo "&nbsp;&nbsp;" . $i . ". " . $array['prefix'] . $array['name'] . "&nbsp;&nbsp;" . $array['surname'] . "<br />";
                                echo "</td>";
                                echo "<td width='50%'>" . $array['nPhone'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            //echo "<td>" . $row['nPhone'] . "</td>";

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
                // $sql1 = "SELECT DISTINCT vocal_name_1 FROM `data`";
                // if ($result1 = mysqli_query($conn, $sql1)) {
                //     if (mysqli_num_rows($result1) > 0) {
                //         $counts = 0;
                //         while ($row = mysqli_fetch_array($result1)) {
                //             $counts ++;
                //             echo $counts;
                //             echo $row[0];
                //             echo "<br>";
                //         }
                //     }
                // }

                // $sql = "SELECT * FROM `data` GROUP BY vocal_name_1 ORDER BY community ASC";

                $q_allA = "SELECT COUNT(id) AS c_i FROM data WHERE vocal_name_1 != '' AND vocal_name_2 = '' AND vocal_name_3 = ''";
                $result = mysqli_query($conn, $q_allA);
                $count_n = mysqli_fetch_array($result);


                $sql = "SELECT community FROM `data` WHERE vocal_name_1 != '' GROUP by community order by community ";
                //$sql = "SELECT * FROM `data` WHERE vocal_name_1 != '' AND vocal_name_2 = '' AND vocal_name_3 = '' GROUP BY vocal_name_1 ORDER BY community ASC;";
                // $sql = "SELECT * FROM `data` WHERE vocal_name_2 != '' GROUP BY vocal_name_2 ORDER BY community ASC";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $count_i = mysqli_num_rows($result);
                        $names = '';
                        $counts = 0;
                        // echo "<h3 class='center'>รายชื่อ " . $prints . "</h3>";
                        echo "<h3 class='center'>รายชื่อทั้งหมด " . $count_i . " ชุมชน รายงานตามแกนนำ A จำนวน " . number_format($count_n['c_i'], 0) . " ราย</h3>";
                        echo "<table id='myTable' class='table table-bordered'>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "<th class='center' scope='col'>ชื่อ - นามสกุล</th>";
                        /*
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        */
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            /*
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }*/
                            // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                            echo "<tr class='landscape'>";
                            echo "<td align='center'>" . $counts . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "<td>";
                            //$q = "SELECT * FROM data WHERE community='$row[community]'  ";
                            $q = "SELECT * FROM data WHERE vocal_name_1 != '' AND community='$row[community]' GROUP BY vocal_name_1 ORDER BY community ASC";
                            $res = mysqli_query($conn, $q);
                            echo "<table class='table table-hover'>";
                            echo "<tr class='bg-light'>";
                            // echo "<td width='55%' align='center'>ชื่อ - นามสกุล</td>";
                            // echo "<td width='15%' align='center'>แกนนำ A</td>";
                            // echo "<td width='15%' align='center'>แกนนำ B</td>";
                            // echo "<td width='15%' align='center'>แกนนำ C</td>";
                            echo "</tr>";
                            $i = 0;
                            while ($array = mysqli_fetch_array($res)) {
                                $i++;

                                echo "<tr>";
                                echo "<td>";
                                echo $i . ". " . $array['prefix'] . $array['name'] . "&nbsp;&nbsp;" . $array['surname'] . "&nbsp;&nbsp;" . $array['nPhone'] . "<br />";
                                echo "</td>";
                                //echo "<td>".$array['vocal_name_1']."</td>";
                                //echo "<td>".$array['vocal_name_2']."</td>";
                                //echo "<td>".$array['vocal_name_3']."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            //echo "<td>" . $row['nPhone'] . "</td>";

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
            } else if ($_REQUEST["id"] == "allB") {
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                // $sql = "SELECT * FROM `data` ORDER BY community ASC";
                // $sql = "SELECT * FROM `data` WHERE vocal_name_2 != '' ORDER BY community ASC";
                //$sql = "SELECT * FROM `data` WHERE vocal_name_2 != '' GROUP BY vocal_name_2 ORDER BY community ASC";

                $q_allB = "SELECT COUNT(id) AS c_i FROM data WHERE vocal_name_2 != ''";
                $result = mysqli_query($conn, $q_allB);
                $count_n = mysqli_fetch_array($result);

                $sql = "SELECT community FROM `data` WHERE vocal_name_2 != '' GROUP by community order by community ";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $count_i = mysqli_num_rows($result);
                        $names = '';
                        $counts = 0;
                        // echo "<h3 class='center'>รายชื่อ " . $prints . "</h3>";
                        echo "<h3 class='center'>รายชื่อทั้งหมด " . $count_i . " ชุมชน รายงานตามแกนนำ B จำนวน " . number_format($count_n['c_i'], 0) . " ราย</h3>";
                        echo "<table id='myTable' class='table table-bordered'>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "<th class='center' scope='col'>ชื่อ - นามสกุล</th>";
                        /*
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        */
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            /*
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }*/
                            // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                            echo "<tr class='landscape'>";
                            echo "<td align='center'>" . $counts . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "<td>";
                            //$q = "SELECT * FROM data WHERE community='$row[community]'  ";
                            $q = "SELECT * FROM data WHERE vocal_name_2 != '' AND community='$row[community]' GROUP BY vocal_name_2 ORDER BY community ASC";
                            $res = mysqli_query($conn, $q);
                            echo "<table class='table table-hover'>";
                            echo "<tr class='bg-light'>";
                            // echo "<td width='55%' align='center'>ชื่อ - นามสกุล</td>";
                            //echo "<td width='15%' align='center'>แกนนำ A</td>";
                            //echo "<td width='15%' align='center'>แกนนำ B</td>";
                            //echo "<td width='15%' align='center'>แกนนำ C</td>";
                            echo "</tr>";
                            $i = 0;
                            while ($array = mysqli_fetch_array($res)) {
                                $i++;

                                echo "<tr>";
                                echo "<td>";
                                echo $i . ". " . $array['prefix'] . $array['name'] . "&nbsp;&nbsp;" . $array['surname'] . "&nbsp;&nbsp;" . $array['nPhone'] . "<br />";
                                echo "</td>";
                                // echo "<td>".$array['vocal_name_1']."</td>";
                                //echo "<td>".$array['vocal_name_2']."</td>";
                                // echo "<td>".$array['vocal_name_3']."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            //echo "<td>" . $row['nPhone'] . "</td>";

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
            } else if ($_REQUEST["id"] == "allC") {
                if (!empty($_POST['prints'])) {
                    echo "NOT";
                }
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $q_allC = "SELECT COUNT(id) AS c_i FROM data WHERE vocal_name_3 != ''";
                $result = mysqli_query($conn, $q_allC);
                $count_n = mysqli_fetch_array($result);
                //$sql = "SELECT * FROM `data` WHERE vocal_name_3 != '' ORDER BY community ASC";
                $sql = "SELECT community FROM `data` WHERE vocal_name_3 != '' GROUP by community order by community ";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $count_i = mysqli_num_rows($result);
                        $names = '';
                        $counts = 0;
                        echo 'รวม', $count_i;
                        echo 'รวม', $i;
                        $countI;
                        // echo "<h3 class='center'>รายชื่อ " . $prints . "</h3>";
                        echo "<h3 class='center'>รายชื่อทั้งหมด " . $count_i . " ชุมชน รายงานตามแกนนำ C จำนวน " . number_format($count_n['c_i'], 0) . " ราย</h3>";
                        echo "<table id='myTable' class='table table-bordered'>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        echo "<th class='center' scope='col'>ชื่อ - นามสกุล</th>";
                        /*
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        */
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            /*
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }*/
                            // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                            echo "<tr class='landscape'>";
                            echo "<td align='center'>" . $counts . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            echo "<td>";
                            //$q = "SELECT * FROM data WHERE community='$row[community]'  ";
                            $q = "SELECT * FROM data WHERE vocal_name_3 != '' AND community='$row[community]' GROUP BY vocal_name_3 ORDER BY community ASC";
                            $res = mysqli_query($conn, $q);
                            echo "<table class='table table-hover'>";
                            echo "<tr class='bg-light'>";
                            // echo "<td width='100%' align='center'>ชื่อ - นามสกุล</td>";
                            // echo "<td width='15%' align='center'>แกนนำ A</td>";
                            // echo "<td width='15%' align='center'>แกนนำ B</td>";
                            // echo "<td width='15%' align='center'>แกนนำ C</td>";
                            echo "</tr>";
                            $i = 0;

                            while ($array = mysqli_fetch_array($res)) {
                                $i++;

                                echo "<tr>";
                                echo "<td>";
                                echo $i . ". " . $array['prefix'] . $array['name'] . "&nbsp;&nbsp;" . $array['surname'] . "&nbsp;&nbsp;" . $array['nPhone'] . "<br />";
                                echo "</td>";
                                // echo "<td>".$array['vocal_name_1']."</td>";
                                // echo "<td>".$array['vocal_name_2']."</td>";
                                // echo "<td>".$array['vocal_name_3']."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "</td>";
                            // echo "<td>" . $row['birthday'] . "</td>";
                            // echo "<td>" . $adress . "</td>";
                            //echo "<td>" . $row['nPhone'] . "</td>";
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
            } else if ($_REQUEST["id"] == "allCommu") {
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");
                // include 'connect.php';
                $conn = OpenCon();
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                //$sql = "SELECT * FROM `data` ORDER BY id ";
                $q_allA = "SELECT COUNT(id) AS c_i FROM data";
                $result = mysqli_query($conn, $q_allA);
                $count_n = mysqli_fetch_array($result);

                $sql = "SELECT community FROM `data` GROUP by community order by community ";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        //หาชุมชนทั้งหมด
                        $sql = "SELECT DISTINCT community FROM `data` GROUP by community order by community ";
                        $result_ = mysqli_query($conn, $sql);
                        $count_i = mysqli_num_rows($result);
                        echo "<h3 class='center'>รายงานข้อมูลทั้งหมด " . $count_i . " ชุมชน รวมจำนวน " . number_format($count_n['c_i'], 0) . " ราย</h3><hr/>";
                        while ($row = mysqli_fetch_array($result_)) {
                            echo "<h3>" . $row['community'] . "</h3>";
                            echo "<hr>";

                            //หา A
                            $qa = "SELECT vocal_name_1,nPhone FROM data WHERE community='$row[community]' GROUP BY vocal_name_1 ORDER BY vocal_name_1 ASC";
                            $res_a = mysqli_query($conn, $qa);
                            $i = 0;
                            echo "<div class='card-body'><ol><u><h6 class='text-primary'>ทีมแกน A</h6></u>";
                            while ($a = mysqli_fetch_array($res_a)) {
                                $i++;
                                // echo $a['vocal_name_1'];
                                echo "<table width='100%'><tr><td width='280'><li>" . $a['vocal_name_1'] . "</li></td><td width='500'>" . $a['nPhone'] . "</td></tr></table>";
                                //หา B
                                $qb = "SELECT vocal_name_2,nPhone FROM data WHERE vocal_name_1='$a[vocal_name_1]' AND  vocal_name_2 <> '' 
                                GROUP BY vocal_name_2 ORDER BY vocal_name_2"; //echo $qb;
                                $res_b = mysqli_query($conn, $qb);
                                $count_b = mysqli_num_rows($res_b);
                                if ($count_b > 0) {
                                    echo "<br><u><h6 class='text-info'>ทีมแกน B</h6></u>";
                                }
                                //หา C แบบไม่มี B
                                $qbC = "SELECT vocal_name_3,nPhone FROM data WHERE vocal_name_1='$a[vocal_name_1]' AND vocal_name_3 != '' GROUP BY vocal_name_3 ORDER BY vocal_name_3";
                                $res_C = mysqli_query($conn, $qbC);
                                $count_C = mysqli_num_rows($res_C);
                                if ($count_C > 0) {
                                    echo "<br><u><h6 class='text-info'>ทีมแกน C</h6></u>";
                                }
                                echo "<ol>";
                                while ($C = mysqli_fetch_array($res_C)) {
                                    echo "<table width='100%'><tr><td width='248'><li>" . $C['vocal_name_3'] . "</li></td><td width='500'>" . $C['nPhone'] . "</td></tr></table>";
                                }
                                echo "</ol>";
                                echo "<ol>";
                                while ($b = mysqli_fetch_array($res_b)) {
                                    echo "<table width='100%'><tr><td width='248'><li>" . $b['vocal_name_2'] . "</li></td><td width='500'>" . $b['nPhone'] . "</td></tr></table>";
                                    //หา C
                                    $qc = "SELECT vocal_name_3,nPhone FROM data WHERE vocal_name_2='$b[vocal_name_2]' AND  vocal_name_3 <> '' 
                                    GROUP BY vocal_name_3 ORDER BY vocal_name_3"; //echo $qc;
                                    $res_c = mysqli_query($conn, $qc);
                                    $count_c = mysqli_num_rows($res_c);
                                    if ($count_c > 0) {
                                        echo "<br><u><h6 class='text-success'>ทีมแกน C</h6></u>";
                                    }
                                    echo "<ol>";
                                    while ($c = mysqli_fetch_array($res_c)) {
                                        echo "<table width='100%'><tr><td width='215'><li>" . $c['vocal_name_3'] . "</li></td><td width='500'>" . $c['nPhone'] . "</td></tr></table>";
                                    }
                                    echo "</ol>";
                                }
                                echo "</ol>";
                            }
                            echo "</ol></div><hr>";
                        }
                    } else {
                        echo "ไม่มีข้อมูลใน DATABASE";
                        // echo "No records matching your query were found.";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            } else if ($_REQUEST["id"] == "AllLeader") {
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");
                // include 'connect.php';
                $conn = OpenCon();
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $sql = "SELECT vocal_name_1, community, vocal_name_3 FROM `data` GROUP by vocal_name_1 order by vocal_name_1,community ";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        $count_i = mysqli_num_rows($result);
                        $names = '';
                        $counts = 0;
                        // echo "<h3 class='center'>รายชื่อ " . $prints . "</h3>";
                        echo "<h3 class='center'>รายงานข้อมูลแกนนำทั้งหมด</h3>";
                        echo "<table id='myTable' class='table table-bordered table-hover'>";
                        echo "<thead>";
                        echo "<tr class='table-active landscape'>";
                        echo "<th class='center' scope='col'>ลำดับ</th>";
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>ชุมชน/เขต</th>";
                        /*
                        echo "<th class='center' scope='col'>แกนนำ A</th>";
                        echo "<th class='center' scope='col'>แกนนำ B</th>";
                        echo "<th class='center' scope='col'>แกนนำ C</th>";
                        echo "<th class='center' scope='col'>คำนำหน้า</th>";
                        
                        echo "<th class='center' scope='col'>สกุล</th>";
                        echo "<th class='center' scope='col'>วันเดือนปีเกิด</th>";
                        echo "<th class='center' scope='col'>ที่อยู่</th>";
                        echo "<th class='center' scope='col'>เบอร์โทร</th>";
                        */
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = mysqli_fetch_array($result)) {
                            $counts++;
                            $names = $row['community'];
                            /*
                            if ($row['hNumber'] == null) {
                                $adress = '';
                            } else {
                                $adress = "บ้านเลขที่ " . $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
                            }*/
                            // echo "<h3 class='center'>รายชื่อ" . $names . "</h3>";
                            echo "<tr>";
                            echo "<td align='center'>" . $counts . "</td>";
                            echo "<td>" . $row['vocal_name_1'] . "</td>";
                            echo "<td>";
                            //$q = "SELECT * FROM data WHERE community='$row[community]'  ";
                            $q = "SELECT name, surname, community, vocal_name_3 FROM data WHERE vocal_name_1='$row[vocal_name_1]' ORDER BY vocal_name_2,community ASC";
                            $res = mysqli_query($conn, $q);
                            //echo "<table border='0'>";
                            $i = 0;
                            while ($array = mysqli_fetch_array($res)) {
                                $i++;

                                //echo "<tr>";
                                //echo "<td>";
                                echo $i . ". " . $array['name'] . "&nbsp;&nbsp;" . $array['surname'] . "<br />";
                                // echo "</td>";
                                // echo "<td>".$array['vocal_name_1']."</td>";
                                // echo "<td>".$array['vocal_name_2']."</td>";
                                // echo "<td>".$array['vocal_name_3']."</td>";
                                //echo "</tr>";

                            }
                            //echo "</table>";
                            echo "</td>";
                            echo "<td>" . $row['vocal_name_3'] . "</td>";
                            echo "<td>" . $row['community'] . "</td>";
                            //echo "<td>" . $row['nPhone'] . "</td>";

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
            }

            ?>
        </div>
    </div>
</body>

</html>