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
            {
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");
                // include 'connect.php';
                $conn = OpenCon();
                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                //$sql = "SELECT * FROM `data` ORDER BY id ";
                /*
                $q_allA = "SELECT COUNT(id) AS c_i FROM data";
                $result = mysqli_query($conn,$q_allA);
                $count_n = mysqli_fetch_array($result);
                */

                //หาชุมชนทั้งหมด
                $sql = "SELECT DISTINCT community FROM `data` GROUP by community order by community ";
                $result_ = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result_)){
                    echo "<h3>".$row['community']. "</h3>";
                    echo "<hr>";

                    $qa = "SELECT vocal_name_1,nPhone FROM data WHERE community='$row[community]' GROUP BY vocal_name_1 ORDER BY vocal_name_1 ASC";
                    $res_a = mysqli_query($conn,$qa);
                    $i=0;
                    echo "<u><h6 class='text-primary'>ทีมแกน A</h6></u>";
                    echo "<div class='card-body'>";
                    echo "<div class='row'>";
                    while($a=mysqli_fetch_array($res_a)){
                        echo "<div class='col-3'>" .$a['vocal_name_1']. "</div>";
                        
                    }
                    echo "</div></div>";

                }

            }
            ?>

        </div>
    </div>


</body>

</html>