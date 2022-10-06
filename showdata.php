<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ข้อมูล</title>
  <!--นำเข้าไฟล์  Css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />

  <!--นำเข้าไฟล์  Jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!--นำเข้าไฟล์  plug-in DataTable -->
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {

      //คำสั่ง Javascript สำหรับเรียกใช้งาน Datatable
      $('#example').DataTable({
        aLengthMenu: [
          [25, 50, 100, 200],
          [25, 50, 100, 200]
        ],
        iDisplayLength: 25,
        "processing": true,
        "serverSide": true,
        'serverMethod': 'post',
        "ajax": "server_processing.php",
        'columns': [{
            data: 'id'
          },
          {
            data: 'prefix'
          },
          {
            data: 'name'
          },
          {
            data: 'surname'
          },
          {
            data: 'idcard'
          },
          {
            data: 'birthday'
          },
          {
            data: 'address'
          },

          {
            data: 'nPhone'
          },
          {
            data: 'community'
          },
          {
            data: 'vocal_name_1'
          },
          {
            data: 'vocal_name_2'
          },
          {
            data: 'vocal_name_3'
          },
          {
            data: 'Action'
          },
        ]
      });
    });
  </script>
  <link rel="stylesheet" href="css\bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="css\style.css"> -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet"> -->
</head>

<body>
  <div class="">
    <form action="print.php" method="post">
      <div class="form-group row">

        <label for="prefix" class="col-sm-1 col-form-label">เลือกแกนนำ</label>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "db_vote");
        if ($conn === false) {
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT DISTINCT vocal_name_1 FROM `data`";
        if ($result = mysqli_query($conn, $sql)) {
          if (mysqli_num_rows($result) > 0) {
            echo "<div class='col-sm-3'>";
            echo "<select name='prints' class='form-control'>";
            while ($row = mysqli_fetch_array($result)) {
              // echo $row['district'];
              echo "<option selected>" . $row['vocal_name_1'] . "</option>";
            }
            echo "</select>";
            echo "</div>";
            mysqli_free_result($result);
          } else {
            echo "No records matching your query were found.";
          }
        } else {
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        ?>
        <button style="width: 10%;" type="submit" name="submit" value="Submit" class="btn btn-success btns">สร้างรายงาน</button>
      </div>
    </form>
  </div>
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>คำนำหน้า</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>เลขบัตรประชาชน</th>
        <th>วันเดือนปีเกิด</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>ชุมชน/เขต</th>
        <th>แกนนำ A</th>
        <th>แกนนำ B</th>
        <th>แกนนำ C</th>
        <th>Action</th>
      </tr>
    </thead>
  </table>
  <br>
  <button style="width: 10%;" onclick="history.back()" class="btn btn-primary">กลับ</button>
</body>

</html>