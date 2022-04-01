<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>DISPLAY TABLE</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>name</th>
        <th>age</th>
        <th>number</th>
        <th>email</th>
        <th>college name</th>
        <th>gender</th>
        <th>city</th>
      </tr>

<style>
  body{
    background-color:skyblue;
  }
  </style>
    </thead>
    <tbody>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reknot solution";

$conn =  mysqli_connect("localhost","root","","reknot solution");

$sql ="SELECT * from registertable";

$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_assoc($result))
{
  echo '<tr>';
  echo '<td>'.$row['name'].'</td>';
  echo '<td>'.$row['age'].'</td>';
  echo '<td>'.$row['number'].'</td>';
  echo '<td>'.$row['email'].'</td>';
  echo '<td>'.$row['college name'].'</td>';
  echo '<td>'.$row['gender'].'</td>';
  echo '<td>'.$row['city'].'</td>';
  echo '</tr>';
}
?>
</tbody>
</table>
</div>

</body>
</html>