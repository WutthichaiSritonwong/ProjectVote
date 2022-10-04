<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูล</title>
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="css\style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body>
<form action="print.php" method="post">
<div class="form-group row">
        <label for="prefix" class="col-sm-2 col-form-label">ชุมชน/เขต</label>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "db_vote");
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql = "SELECT DISTINCT community FROM `data`";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                echo "<div class='col-sm-3'>";
                echo "<select name='prints' class='form-control'>";
                while ($row = mysqli_fetch_array($result)) {
                    // echo $row['district'];
                    echo "<option selected>".$row['community']."</option>";
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
       <button type="submit" name="submit" value="Submit" class="btn btn-success btns">Go</button>
    </div>
</form>
    
    <!-- <table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->
</body>

</html>