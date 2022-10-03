<?php     

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_vote";


// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
mysqli_set_charset($connect, "UTF8");
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
//   echo "Successfully connected";
}



?>