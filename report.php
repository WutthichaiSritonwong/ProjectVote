<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงาน</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
    <script src="css\jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- jQuery UI library -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#autocompleteA").autocomplete({
                source: "autocompleteA.php",
                minLength: 2,
                select: function(event, ui) {}
            });
            $("#autocompleteB").autocomplete({
                source: 'autocompleteB.php',
                minLength: 2,
                select: function(event, ui) {}
            });
            $("#autocompleteC").autocomplete({
                source: 'autocompleteC.php',
                minLength: 2,
                select: function(event, ui) {}
            });
            $("#autocompleteCommu").autocomplete({
                source: 'autocompleteCommu.php',
                minLength: 2,
                select: function(event, ui) {}
            });
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <h3 class="navbar-brand">ฟอร์มกรอกข้อมูล</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">ฟอร์ม
                            <span class="visually-hidden">(กรอกข้อมูลแกนนำ)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="showdata.php">ดูข้อมูลทั้งหมด</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="report.php">สร้างรายงาน</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    
    <div class="container">
        <h3>สร้างรายงานทั้งหมด  </h3>
        <div class="">
            <form class="form-inline" action="print.php" method="post">
                <input type="hidden" id="id" name="id" value="All">
                <?php
                include 'connect.php';
                $conn = OpenCon();
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                if ($conn === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM `data`";
                if ($result = mysqli_query($conn, $sql)) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                        }
                        mysqli_free_result($result);
                    } else {
                        echo "No records matching your query were found.";
                    }
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                ?>
                <br>
                <button style="width: 20%;" type="submit" name="all" value="Submit" class="btn btn-success mb-2 mx-sm-3">สร้างรายงานทั้งหมด</button>
            </form>
        </div>
        <hr>
        
        <!-- Write your comments here 
        <div class="">
            <h3>สร้างรายงานแกนนำ/พร้อมชุมชน</h3>
            <form class="" action="print.php" method="post">
                <input type="hidden" id="id" name="id" value="AllLeader">
                <?php
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         // echo "<input type='text' autocomplete='off' name='$row[vocal_name_1]' id='autocomplete' placeholder='ชื่อแกนนำ' class='form-control'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             // echo "<option value='$row[vocal_name_1]'>" . $row['vocal_name_1'] . "</option>";

                //         }
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                // if ($conn === false) {
                //     die("ERROR: Could not connect. " . mysqli_connect_error());
                // }
                // $sql = "SELECT DISTINCT vocal_name_1 FROM `data`";
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         echo "<select name='prints' class='form-control form-group mx-sm-3 mb-2' style='width: 50%;'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             echo "<option value='$row[vocal_name_1]'>" . $row['vocal_name_1'] . "</option>";
                //         }
                //         echo "</select>";
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                ?>
                <br>
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-danger mb-2 mx-sm-3">สร้างรายงาน</button>
            </form>
        </div>
        <hr>
        -->
        <div class="">
            <h3>สร้างรายงานตามแกนนำ A</h3>
            <form class="" action="print.php" method="post">
                <input type="text" autocomplete="off" name="prints" id="autocompleteA" placeholder="ชื่อชุมชนแกนนำ A" class="form-control form-group mx-sm-3 mb-2" style='width: 50%;'>
                <input type="hidden" id="id" name="id" value="A">
                <?php
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         // echo "<input type='text' autocomplete='off' name='$row[vocal_name_1]' id='autocomplete' placeholder='ชื่อแกนนำ' class='form-control'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             // echo "<option value='$row[vocal_name_1]'>" . $row['vocal_name_1'] . "</option>";

                //         }
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                // if ($conn === false) {
                //     die("ERROR: Could not connect. " . mysqli_connect_error());
                // }
                // $sql = "SELECT DISTINCT vocal_name_1 FROM `data`";
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         echo "<select name='prints' class='form-control form-group mx-sm-3 mb-2' style='width: 50%;'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             echo "<option value='$row[vocal_name_1]'>" . $row['vocal_name_1'] . "</option>";
                //         }
                //         echo "</select>";
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                ?>
                <br>
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-primary mb-2 mx-sm-3">สร้างรายงาน</button>
            </form>
            <form class="" action="print.php" method="post">
                <input type="hidden" id="id" name="id" value="allA">
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-primary mb-2 mx-sm-3">สร้างรายงานทั้งหมด</button>
            </form>
        </div>
        <hr>
        <h3>สร้างรายงานตามแกนนำ B</h3>
        <div class="">
            <form class="" action="print.php" method="post">
                <input type="text" autocomplete="off" name="prints" id="autocompleteB" placeholder="ชื่อชุมชนแกนนำ B" class="form-control form-group mx-sm-3 mb-2" style='width: 50%;'>
                <input type="hidden" id="id" name="id" value="B">
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                // if ($conn === false) {
                //     die("ERROR: Could not connect. " . mysqli_connect_error());
                // }
                // $sql = "SELECT DISTINCT vocal_name_2 FROM `data`";
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         echo "<select name='prints' class='form-control form-group mx-sm-3 mb-2' style='width: 50%;'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             echo "<option value='$row[vocal_name_2]'>" . $row['vocal_name_2'] . "</option>";
                //         }
                //         echo "</select>";
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                ?>
                <br>
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-info mb-2 mx-sm-3">สร้างรายงาน</button>
            </form>
            <form class="" action="print.php" method="post">
                <input type="hidden" id="id" name="id" value="allB">
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-info mb-2 mx-sm-3">สร้างรายงานทั้งหมด</button>
            </form>
        </div>
        <hr>
        <h3>สร้างรายงานตามแกนนำ C</h3>
        <div class="">
            <form class="" action="print.php" method="post">
            <input type="text" autocomplete="off" name="prints" id="autocompleteC" placeholder="ชื่อชุมชนแกนนำ C" class="form-control form-group mx-sm-3 mb-2" style='width: 50%;'>
                <input type="hidden" id="id" name="id" value="C">
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                // if ($conn === false) {
                //     die("ERROR: Could not connect. " . mysqli_connect_error());
                // }
                // $sql = "SELECT DISTINCT vocal_name_3 FROM `data`";
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         echo "<select name='prints' class='form-control form-group mx-sm-3 mb-2' style='width: 50%;'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             echo "<option value='$row[vocal_name_3]'>" . $row['vocal_name_3'] . "</option>";
                //         }
                //         echo "</select>";
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                ?>
                <br>
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-dark mb-2 mx-sm-3">สร้างรายงาน</button>
            </form>
            <form class="" action="print.php" method="post">
                <input type="hidden" id="id" name="id" value="allC">
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-dark mb-2 mx-sm-3">สร้างรายงานทั้งหมด</button>
            </form>
        </div>
        <hr>
        <h3>สร้างรายงานตามชุมชน</h3>
        <div class="">
            <form class="" action="print.php" method="post">
            <input type="text" autocomplete="off" name="prints" id="autocompleteCommu" placeholder="ชื่อชุมชน" class="form-control form-group mx-sm-3 mb-2" style='width: 50%;'>
                <input type="hidden" id="id" name="id" value="Commu">
                <?php
                // $conn = mysqli_connect("localhost", "root", "", "db_vote");

                // if ($conn === false) {
                //     die("ERROR: Could not connect. " . mysqli_connect_error());
                // }
                // $sql = "SELECT DISTINCT vocal_name_3 FROM `data`";
                // if ($result = mysqli_query($conn, $sql)) {
                //     if (mysqli_num_rows($result) > 0) {
                //         echo "<select name='prints' class='form-control form-group mx-sm-3 mb-2' style='width: 50%;'>";
                //         while ($row = mysqli_fetch_array($result)) {
                //             echo "<option value='$row[vocal_name_3]'>" . $row['vocal_name_3'] . "</option>";
                //         }
                //         echo "</select>";
                //         mysqli_free_result($result);
                //     } else {
                //         echo "No records matching your query were found.";
                //     }
                // } else {
                //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                // }
                ?>
                <br>
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-warning mb-2 mx-sm-3">สร้างรายงาน</button>
            </form>
            <form class="" action="print.php" method="post">
                <input type="hidden" id="id" name="id" value="allCommu">
                <button style="width: 20%;" type="submit" name="submit" value="Submit" class="btn btn-warning mb-2 mx-sm-3">สร้างรายงานทั้งหมด</button>
            </form>
        </div>
    </div>
</body>

</html>