<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>โปรแกรมเลือกตั้ง</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <link rel="stylesheet" href="css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container center">
        <h1 style="color: #EFFBFF;">ฟอร์มกรอกข้อมูล</h1>
    </div>
    <div class="">
        <div class="card mb-3">
            <div class="card-body">
                <form action="saveDB.php" method="post">
                    <div class="form-group row">
                        <label for="prefix" class="col-sm-2 col-form-label">คำนำหน้า</label>
                        <div class="col-sm-3">
                            <select name="prefix" class="form-control">
                                <option selected>เลือก...</option>
                                <option value='นาย'>นาย</option>
                                <option value='นางสาว'>นางสาว</option>
                                <option value='นาง'>นาง</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">ชื่อ</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="name" name="name" />
                        </div>

                        <label for="surname" class="col-sm-2 col-form-label">นามสกุล</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="surname" name="surname" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="idcard" class="col-sm-2 col-form-label">เลขบัตรประชาชน</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="idcard" name="idcard" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">วัน-เดือน-ปีเกิด</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="birthday" name="birthday" placeholder="00/00/0000" />
                        </div>
                    </div>
                    <!-- Start ที่อยู่ -->
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label">ที่อยู่</label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="hNumber" placeholder="บ้านเลขที่">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="moo" placeholder="หมู่">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="alley" placeholder="ซอย">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="road" placeholder="ถนน">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-sm-2 col-form-label"></label>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="parish" placeholder="ตำบล">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="district" placeholder="อำเภอ">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="province" placeholder="จังหวัด">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="zip" placeholder="รหัสไปรษณีย์">
                        </div>
                    </div>
                    <!-- End ที่อยู่ -->
                    <div class="form-group row">
                        <label for="nPhone" class="col-sm-2 col-form-label">เบอร์โทร</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="nPhone" name="nPhone" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="community" class="col-sm-2 col-form-label">ชุมชน/เขต</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="community" name="community" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="leader_id" class="col-sm-2 col-form-label">แกนนำ 1</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="leader_id" name="vocal_id_1" placeholder="รหัสแกนนำ 1" />
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="leader_id" name="vocal_name_1" placeholder="ชื่อแกนนำ 1" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="leader_id" class="col-sm-2 col-form-label">แกนนำ 2</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="leader_id" name="vocal_id_2" placeholder="รหัสแกนนำ 2" />
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="leader_id" name="vocal_name_2" placeholder="ชื่อแกนนำ 2" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="leader_id" class="col-sm-2 col-form-label">แกนนำ 3</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="leader_id" name="vocal_id_3" placeholder="รหัสแกนนำ 3" />
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="leader_id" name="vocal_name_3" placeholder="ชื่อแกนนำ 3" />
                        </div>
                    </div>
                    <button type="submit" name="submit" value="Submit" class="btn btn-success btns">บันทึก</button>
                </form>
                <br>
                <div class="btn-text-right">
                    <button type="submit" id="submitBtn" class="btn btn-primary btns">ดูข้อมูล</button>
                </div>
                <script>
                    document.getElementById("submitBtn").addEventListener("click", myFunction);

                    function myFunction() {
                        window.location = 'print.php';
                    }
                </script>
            </div>
        </div>
    </div>
</body>
<script src="js\bootstrap.min.js"></script>

</html>