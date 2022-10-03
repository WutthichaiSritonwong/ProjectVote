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
            $conn = mysqli_connect("localhost", "root", "", "db_vote");
            // $conn = mysqli_connect("sql6.freesqldatabase.com", "sql6523649", "lI4P283a7F", "sql6523649");
            // $conn = mysqli_connect("localhost", "id19657126_admin", "6>X*9Td7l|?0v?RC", "id19657126_db_vote");
            if ($conn === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $sql = "SELECT * FROM data";

            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    $names = '';
                    $counts = 0;
                    echo "<h1 class='center'>รายชื่อแกนนำเขต" . $names . "</h1>";
                    echo "<table id='myTable' class='table table-bordered landscape' >";
                    echo "<tr class='thead-dark landscape'>";
                    echo "<th scope='col'>#</th>";
                    echo "<th scope='col'>คำนำหน้า</th>";
                    echo "<th scope='col'>ชื่อ</th>";
                    echo "<th scope='col'>สกุล</th>";
                    echo "<th scope='col'>เลขบัตรประชาชน</th>";
                    echo "<th scope='col'>วันเดือนปีเกิด</th>";
                    echo "<th scope='col'>ที่อยู่</th>";
                    echo "<th scope='col'>เบอร์โทร</th>";
                    echo "<th scope='col'>ชุมชน/เขต</th>";
                    echo "<th scope='col'>แกนนำ 1</th>";
                    echo "<th scope='col'>แกนนำ 2</th>";
                    echo "<th scope='col'>แกนนำ 3</th>";
                    echo "</tr>";

                    while ($row = mysqli_fetch_array($result)) {
                        $counts++;
                        $names = 'DOME';
                        echo "<tr class='landscape'>";
                        echo "<td>" . $counts . "</td>";
                        echo "<td>" . $row['prefix'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['surname'] . "</td>";
                        echo "<td>" . $row['idcard'] . "</td>";
                        echo "<td>" . $row['birthday'] . "</td>";
                        echo "<td>" . "บ้านเลขที่ " . $row['hNumber'] . "หมู่ " . $row['moo'] . "ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'] . "</td>";
                        echo "<td>" . $row['nPhone'] . "</td>";
                        echo "<td>" . $row['community'] . "</td>";
                        echo "<td>" . $row['vocal_name_1'] . "</td>";
                        echo "<td>" . $row['vocal_name_2'] . "</td>";
                        echo "<td>" . $row['vocal_name_3'] . "</td>";
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
            ?>
        </div>
    </div>
</body>

</html>