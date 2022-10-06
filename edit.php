<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>แก้ไขข้อมูล</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <script src="css\jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_vote");
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    // ID Form
    $ID = $_GET["id"];

    $sql = "SELECT * FROM data  WHERE id = '$ID' ";
    if ($result = mysqli_query($conn, $sql)) {
    ?>
        <div class="container center">
            <h1 style="margin-Top: 20px;">ฟอร์มแก้ไขข้อมูล <?php echo $ID; ?></h1>

        </div>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) { ?>
                <div class="container box">
                    <br>
                    <div class="">
                        <form class="needs-validation" action="update.php" method="post">
                            <h4 class="mb-3">ข้อมูลผู้ลงคะแนน <input style="visibility: hidden;"type="text" name="ID" value="<?php echo $ID; ?>"> </h4> 
                            <div class="row">
                                <div class="col-md-2 mb-3">
                                    <label for="prefix">คำนำหน้า</label>
                                    <select name="prefix" value="<?php echo $row['prefix']; ?>" class="form-control selects">
                                        <option value='นาย'>นาย</option>
                                        <option value='นางสาว'>นางสาว</option>
                                        <option value='นาง'>นาง</option>
                                    </select>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $row['name']; ?>" required="">
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="surname">นามสกุล</label>
                                    <input type="text" class="form-control" id="surname" name="surname" placeholder="" value="<?php echo $row['surname']; ?>" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="idcard">เลขบัตรประชาชน</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="idcard" name="idcard" placeholder="" value="<?php echo $row['idcard']; ?>" required="">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3 ">
                                    <label for="birthday">วัน/เดือน/ปีเกิด</label>
                                    <input class="form-control" id="datepicker" name="birthday" placeholder="" value="<?php echo $row['birthday']; ?>">
                                </div>
                            </div>
                            <hr>
                            <h4 class="mb-3">ที่อยู่</h4>
                            <div class="row">
                                <div class="col-md-2 mb-3">
                                    <label for="hNumber">บ้านเลขที่</label>
                                    <input type="text" class="form-control" id="hNumber" name="hNumber" placeholder="" value="<?php echo $row['hNumber']; ?>">
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="moo">หมู่</label>
                                    <input type="text" class="form-control" id="moo" name="moo" placeholder="" value="<?php echo $row['moo']; ?>">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="alley">ซอย</label>
                                    <input type="text" class="form-control" id="alley" name="alley" placeholder="" value="<?php echo $row['alley']; ?>">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="road">ถนน</label>
                                    <input type="text" class="form-control" id="road" name="road" placeholder="" value="<?php echo $row['road']; ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="parish">ตำบล</label>
                                    <input type="text" class="form-control" id="parish" name="parish" placeholder="" value="<?php echo $row['parish']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="district">อำเภอ</label>
                                    <input type="text" class="form-control" id="district" name="district" placeholder="" value="<?php echo $row['district']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="province">จังหวัด</label>
                                    <input type="text" class="form-control" id="province" name="province" placeholder="" value="<?php echo $row['province']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">รหัสไปรษณีย์</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="" value="<?php echo $row['zip']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="nPhone">หมายเลขโทรศัพท์</label>
                                    <input type="text" class="form-control  " id="nPhone" name="nPhone" placeholder="" value="<?php echo $row['nPhone']; ?>" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="community">ชุมชน/เขต</label>
                                    <input type="text" class="form-control " id="community" name="community" placeholder="" value="<?php echo $row['community']; ?>" required="" />
                                </div>
                            </div>
                            <hr class="mb-4">

                            <h4 class="mb-3">แกนนำ</h4>

                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <input type="text" class="form-control" id="leader_id" name="vocal_id_1" placeholder="รหัสแกนนำ" value="<?php echo $row['vocal_id_1']; ?>" required="">
                                    <small class="text-muted">*กรอกรหัสของแกนนำ A</small>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" class="form-control" id="leader_id" name="vocal_name_1" placeholder="ชื่อแกนนำ" value="<?php echo $row['vocal_name_1']; ?>" required="">
                                    <small class="text-muted">*กรอกชื่อของแกนนำ A</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <input type="text" class="form-control" id="leader_id" name="vocal_id_2" placeholder="รหัสแกนนำ" value="<?php echo $row['vocal_id_2']; ?>">
                                    <small class="text-muted">*กรอกรหัสของแกนนำ B</small>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" class="form-control" id="leader_id" name="vocal_name_2" placeholder="ชื่อแกนนำ" value="<?php echo $row['vocal_name_2']; ?>">
                                    <small class="text-muted">*กรอกชื่อของแกนนำ B</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <input type="text" class="form-control" id="leader_id" name="vocal_id_3" placeholder="รหัสแกนนำ" value="<?php echo $row['vocal_id_3']; ?>">
                                    <small class="text-muted">*กรอกรหัสของแกนนำ C</small>
                                </div>
                                <div class="col-md-9 mb-3">
                                    <input type="text" class="form-control" id="leader_id" name="vocal_name_3" placeholder="ชื่อแกนนำ" value="<?php echo $row['vocal_name_3']; ?>">
                                    <small class="text-muted">*กรอกชื่อของแกนนำ C</small>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div>
                                <button type="submit" name="submit" style="text-align: center;width: 50%; display: block; margin: 0 auto;" value="Submit" class="btn btn-success btn-lg ">บันทึก</button>
                            </div>
                        </form>
                        <br>
                        <div>
                            <button style="text-align: center;width: 50%; display: block; margin: 0 auto;" onclick="history.back()" class="btn btn-primary btn-lg">กลับ</button>
                        </div>


                    </div>
                    <br>
                </div>
                
    <?php
            }
            mysqli_free_result($result);
        } else {
            echo "No records matching your query were found.";
        }
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    ?>

    <hr>
    <footer class="footer">
        <div class="container">
            <h5 class="center">IT NETWORK COMPUTER SERVICE</h5>
        </div>
    </footer>
</body>
<script src="js\bootstrap.min.js"></script>
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap',
        language: 'th-th',
        format: 'dd/mm/yyyy',
        autoclose: true
    });
</script>

</html>