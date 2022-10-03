<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT</title>
    <link rel="stylesheet" href="style-report.css" />
    <link rel="stylesheet" href="dist\css\bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <style>
        @page land{ size:A4 landscape;}
        .landscape {page: land;}
    </style>
</head>
<body class="landscape">
<div class="book">
    <div class="page">
        <?php
        // $conn = mysqli_connect("localhost", "root", "", "db_vote");
        // $conn = mysqli_connect("sql6.freesqldatabase.com", "sql6523649", "lI4P283a7F", "sql6523649");
        $conn = mysqli_connect("localhost", "id19657126_admin", "6>X*9Td7l|?0v?RC", "id19657126_db_vote");
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM id_card";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<h1 class='center'>รายชื่อแกนนำเขต...</h1>";
                echo "<table id='myTable' class='table table-bordered landscape' >";
                    echo "<tr class='thead-dark landscape'>";
                        echo "<th scope='col'>#</th>";
                        echo "<th scope='col'>คำนำหน้า</th>";
                        echo "<th scope='col'>ชื่อ</th>";
                        echo "<th scope='col'>สกุล</th>";
                        echo "<th scope='col'>เลขบัตรประชาชน</th>";
                        echo "<th scope='col'>วันเดือนปีเกิด</th>";
                        echo "<th scope='col'>ที่อยู่</th>";
                        echo "<th scope='col'>ชุมชน</th>";
                        echo "<th scope='col'>รหัสผู้ประสานงาน</th>";
                        echo "<th scope='col'>ผู้ประสานงาน</th>";
                        echo "<th scope='col'>เบอร์โทร</th>";
                    echo "</tr>";
                $counts = 0;
                while($row = mysqli_fetch_array($result)){
                    $counts++;
                    echo "<tr class='landscape'>";
                    echo "<td>" . $counts . "</td>";
                    echo "<td>" . $row['Prefix'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Surname'] . "</td>";
                    echo "<td>" . $row['Idcard'] . "</td>";
                    echo "<td>" . $row['Birthday'] . "</td>";
                    echo "<td>" . $row['Adress'] . "</td>";
                    echo "<td>" . $row['Community'] . "</td>";
                    echo "<td>" . $row['Leader_ID'] . "</td>";
                    echo "<td>" . $row['Vocal'] . "</td>";
                    echo "<td>" . $row['NPhone'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        ?>
    </div>
</div>
</body>
</html>