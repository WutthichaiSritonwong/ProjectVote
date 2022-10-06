<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>โปรแกรมเลือกตั้ง</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="css\adminlte.min.css" /> -->
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <script src="css\jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container center">
        <h1 style="margin-Top: 20px;">ฟอร์มกรอกข้อมูล</h1>
    </div>
    <br>
    <div class="container box">
        <br>    
        <div class="">
            <h4 class="mb-3">ข้อมูลผู้ลงคะแนน</h4>
            <form class="needs-validation" action="saveDB.php" method="post">
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="prefix">คำนำหน้า</label>
                        <select name="prefix" class="form-control selects">
                            <option value='นาย'>นาย</option>
                            <option value='นางสาว'>นางสาว</option>
                            <option value='นาง'>นาง</option>
                        </select>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="name">ชื่อ</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required="">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="surname">นามสกุล</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="" value="" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="idcard">เลขบัตรประชาชน</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="idcard" name="idcard" placeholder="" required="">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3 ">
                        <label for="birthday">วัน/เดือน/ปีเกิด</label>
                        <input class="form-control" id="datepicker" name="birthday" placeholder="">
                    </div>
                </div>
                <hr>
                <h4 class="mb-3">ที่อยู่</h4>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="hNumber">บ้านเลขที่</label>
                        <input type="text" class="form-control" id="hNumber" name="hNumber" placeholder="">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="moo">หมู่</label>
                        <input type="text" class="form-control" id="moo" name="moo" placeholder="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="alley">ซอย</label>
                        <input type="text" class="form-control" id="alley" name="alley" placeholder="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="road">ถนน</label>
                        <input type="text" class="form-control" id="road" name="road" placeholder="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="parish">ตำบล</label>
                        <input type="text" class="form-control" id="parish" name="parish" placeholder="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="district">อำเภอ</label>
                        <input type="text" class="form-control" id="district" name="district" placeholder="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="province">จังหวัด</label>
                        <input type="text" class="form-control" id="province" name="province" placeholder="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">รหัสไปรษณีย์</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="nPhone">หมายเลขโทรศัพท์</label>
                        <input type="text" class="form-control  " id="nPhone" name="nPhone" placeholder=""/>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="community">ชุมชน/เขต</label>
                        <input type="text" class="form-control " id="community" name="community" />
                    </div>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">แกนนำ</h4>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" id="leader_id" name="vocal_id_1" placeholder="รหัสแกนนำ" required="">
                        <small class="text-muted">*กรอกรหัสของแกนนำ A</small>
                    </div>
                    <div class="col-md-9 mb-3">
                        <input type="text" class="form-control" id="leader_id" name="vocal_name_1" placeholder="ชื่อแกนนำ" required="">
                        <small class="text-muted">*กรอกชื่อของแกนนำ A</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" id="leader_id" name="vocal_id_2" placeholder="รหัสแกนนำ">
                        <small class="text-muted">*กรอกรหัสของแกนนำ B</small>
                    </div>
                    <div class="col-md-9 mb-3">
                        <input type="text" class="form-control" id="leader_id" name="vocal_name_2" placeholder="ชื่อแกนนำ">
                        <small class="text-muted">*กรอกชื่อของแกนนำ B</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" id="leader_id" name="vocal_id_3" placeholder="รหัสแกนนำ">
                        <small class="text-muted">*กรอกรหัสของแกนนำ C</small>
                    </div>
                    <div class="col-md-9 mb-3">
                        <input type="text" class="form-control" id="leader_id" name="vocal_name_3" placeholder="ชื่อแกนนำ">
                        <small class="text-muted">*กรอกชื่อของแกนนำ C</small>
                    </div>
                </div>
                <hr class="mb-4">
                <!-- <button type="submit" name="submit" value="Submit" class="btn btn-success btn-lg Rbtn">บันทึก</button> -->
                <div>
                    <button type="submit" name="submit" style="text-align: center;width: 70%; display: block; margin: 0 auto;" value="Submit" class="btn btn-success btn-lg ">บันทึก</button>
                </div>
            </form>
            <br>
            <button id="submitBtn" type="submit" name="submit" style="text-align: center;width: 70%; display: block; margin: 0 auto;"  class="btn btn-primary btn-lg Rbtn">ดูข้อมูล</button>
        </div>
        <br>
    </div>
    <hr>
    <footer class="footer">
        
    <h6 class="H6Right">IT NETWORK COMPUTER SERVICE</h6>
        <!-- <div class="container">
            <h5 class="center">IT NETWORK COMPUTER SERVICE</h5>
        </div> -->
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

    document.getElementById("submitBtn").addEventListener("click", myFunction);

    function myFunction() {
        window.location = 'print.php';
        window.location = 'showdata.php';
    }
</script>

</html>