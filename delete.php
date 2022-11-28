<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>

<body>
    <?php
    include 'connect.php';
    $conn = OpenCon();

    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $ID = $_GET["id"];
    $sql = "DELETE FROM data WHERE id = '$ID' ";

    $query = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)) {
        echo '<script>
                setTimeout(function() {
                    swal({
                        title: "ลบข้อมูลสำเร็จ",
                        text: "โปรดรอสักครู่!",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    }, function() {
                        window.location = "showdata.php";
                    });
                });
            </script>';
    }else {
        echo "<script type='text/javascript'>";
        echo "window.location = 'showdata.php'; ";
        echo "</script>";
    }

    ?>
</body>

</html>