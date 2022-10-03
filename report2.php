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
</head>
<body class="">
<div class="book">
    <div class="page">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "db_vote");
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM id_card";
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<h1 class='center'>รายชื่อแกนนำเขต...</h1>";
                echo "<table id='myTable' class='table table-bordered' >";
                    echo "<tr class='thead-dark'>";
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
                    echo "<tr >";
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
    <!-- <div class="page">
        <div class="subpage">Page 2/2</div>    
    </div> -->
</div>
</body>
</html>