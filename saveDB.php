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
    // $conn = mysqli_connect("localhost", "root", "", "db_vote");
    // $conn = mysqli_connect("sql6.freesqldatabase.com", "sql6523649", "lI4P283a7F", "sql6523649");
    $conn = mysqli_connect("localhost", "id19657126_admin", "6>X*9Td7l|?0v?RC", "id19657126_db_vote");
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    $prefix = $_REQUEST["prefix"];
    $name = $_REQUEST["name"];
    $surname = $_REQUEST["surname"];
    $idcard = $_REQUEST["idcard"];
    $birthday = $_REQUEST["birthday"];
    $adress = $_REQUEST["adress"];
    $community = $_REQUEST["community"];
    $leader_id = $_REQUEST["leader_id"];
    $vocal = $_REQUEST["vocal"];
    $nPhone = $_REQUEST["nPhone"];

    // เช็คคนซ้ำจาก เลขบัตรประชาชน
    $check = "SELECT Idcard FROM id_card  WHERE Idcard = '$idcard' ";
    $result1 = mysqli_query($conn, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0){
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
        $sql = "INSERT INTO id_card (Prefix,Name,Surname,Idcard,Birthday,Adress,Community,Leader_ID,Vocal,NPhone)
        VALUES ('$prefix','$name','$surname','$idcard','$birthday','$adress','$community','$leader_id','$vocal','$nPhone')";
            
        // if(mysqli_query($conn, $sql)){
        //      echo '<script>window.location.replace("http://localhost/programvote/index.php");</script>';
        // } else{
        //     echo "ERROR: Hush! Sorry $sql. "
        //         . mysqli_error($conn);
        // }
        $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
    }
    mysqli_close($conn);
	if($result){
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลสำเร็จ');";
        echo "window.location = 'index.php'; ";
        echo "</script>";
	}else{
        echo "<script type='text/javascript'>";
        echo "window.location = 'index.php'; ";
        echo "</script>";
    }
    // Close connection
    // mysqli_close($conn);
?>
</body>
</html>