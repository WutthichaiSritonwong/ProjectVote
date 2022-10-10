<?php     

$localhost = "169.254.73.101";
$username = "admin";
$password = "admin";
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