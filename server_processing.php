<?php
if (isset($_POST['start'])) {

  $start = $_POST['start']; //รับข้อมูล เลขหน้าที่จะแสดง 

  $length = $_POST['length']; //รับข้อมูล จำนวนที่แสดงต่อหน้า ค่าเริ่มต้นคือ 10

  $searchData = $_POST['search']['value']; //รับข้อมูล ช่อง Search

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_vote"; //ชื่อฐานข้อมูล

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $searchValueResult = "";

  $searchValueData = mysqli_real_escape_string($conn, $searchData); // Search value

  //Query กรณีมีการค้นหาข้อมูล
  if ($searchValueData != '') {
    $searchValueResult = " WHERE name LIKE '%" . $searchValueData . "%'  OR surname LIKE '%" . $searchValueData . "%' OR vocal_id_1 LIKE '%" . $searchValueData . "%' OR vocal_name_1 LIKE '%" . $searchValueData . "%'OR vocal_id_2 LIKE '%" . $searchValueData . "%' OR vocal_name_2 LIKE '%" . $searchValueData . "%'OR vocal_id_3 LIKE '%" . $searchValueData . "%' OR vocal_name_3 LIKE '%" . $searchValueData . "%' ";
  }

  //Query นับจำนวนข้อมูลทั้งหมด
  $t = mysqli_query($conn, "SELECT COUNT(*) as total FROM data");
  $records = mysqli_fetch_assoc($t);
  $totalRecords = $records['total'];

  //Query ข้อมูลที่จะแสดงใน DataTable
  $sql = "SELECT * FROM data $searchValueResult LIMIT $start , $length";
  $result = mysqli_query($conn, $sql);

  $data = array();
  $counts = 0;
  $Adress = '';
  if (mysqli_num_rows($result) > 0) {
    $ID = 'id';
    while ($row = mysqli_fetch_assoc($result)) {
      $counts++;
      if ($row['hNumber'] == null) {
        $Adress = '';
      } else {
        $Adress = $row['hNumber'] . " หมู่ " . $row['moo'] . " ต." . $row['parish'] . " อ." . $row['district'] . " จ." . $row['province'] . " " . $row['zip'];
      }
      $data[] = array(
        'id' => $counts,
        'prefix' => $row['prefix'],
        'name' => $row['name'],
        'surname' => $row['surname'],
        'idcard' => $row['idcard'],
        'birthday' => $row['birthday'],
        'address' => $Adress,
        'hNumber' => $row['hNumber'],
        'moo' => $row['moo'],
        'alley' => $row['alley'],
        'road' => $row['road'],
        'parish' => $row['parish'],
        'district' => $row['district'],
        'province' => $row['province'],
        'zip' => $row['zip'],
        'nPhone' => $row['nPhone'],
        'community' => $row['community'],
        'vocal_id_1' => $row['vocal_id_1'],
        'vocal_name_1' => $row['vocal_name_1'],
        'vocal_id_2' => $row['vocal_id_2'],
        'vocal_name_2' => $row['vocal_name_2'],
        'vocal_id_3' => $row['vocal_id_3'],
        'vocal_name_3' => $row['vocal_name_3'],
        'Action' => "<a href='edit.php?id=$row[$ID]' type='button' class='btn btn-primary'>แก้ไข</a>",
      );
    }
  }

  mysqli_close($conn);

  $json_data = array(
    "draw"            => intval($_REQUEST['draw']),
    "recordsTotal"    => intval($totalRecords),
    "recordsFiltered" => intval($totalRecords),
    "data"            => $data   // total data array
  );

  echo json_encode($json_data);
}
