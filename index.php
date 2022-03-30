<html>
<head>
<title>Apply for the internship at reknot solutions Pvt Ltd.</title>
</head>
<body background="15.jpg">
<form action="#" method="POST">

<h1 align="center"> <font color="yellow"><u>REKNOT SOLUTION INTERNSHIP</u> </font> </h1>

<table border="1" width="40%" height="600px" align="center" bgcolor="black">
<!---row1--->
<tr align="center" bgcolor="yellow">
<th colspan="2"><font size="10">APPLY FOR INTERNSHIP</font></th>
</tr>

<!---row2--->
<tr>
<th><font color="yellow">
<label>Name</label></th>
<th><input type="text" name="username" required></th>
</tr>

<!---row3--->
<tr>
<th><font color="yellow"><label>Age</label></th>
<th><input type="date" name="Age"></th>
</tr>


<!---row4--->
<tr>
<th><font color="yellow">
<label>Mobile No</label></th>
<th><input type="number" name="MoblieNo" required></th>
</tr>

<!---row5--->
<tr >
<th><font color="yellow">
<label>Email</label></th>
<th><input type="email" name="email" required></th>
</tr>

<!---row6-->
<tr>
    <th><font color="yellow">
    <label>College Name</label> </th>
    <th><input type="name" name="collegename" required></th>
</tr>

<!---row7--->
<tr >
<th><font color="yellow">
<label>Gender</label></th>
<th><font color="yellow">
<input type="radio" name="gender" value="m" required>Male 
<input type="radio" name="gender" value="f" required>Female
</th>
</tr>

<!---row8--->
<tr >
<th><font color="yellow">
<label>Country</label></th>
<th>  
<select name="city" required>
<option selected hidden value="">select city</option>
<option value="India">India</option>
<option value="South Africa">South Africa</option>
<option value="America">America</option>
<option value="Japan">Japan</option>
</th>
</tr>

<!---row9--->
<tr align="center" bgcolor="yellow">
<th colspan="2"><input type="Submit" class="button" name="submit">
<input type="reset">
</th>
</tr>

</table>
</form>

</body>
</html>







<style>
    h1{
        font-size: 50px;
    }

    h2{
        text-align: center;

    }
</style>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$Age = $_POST['Age'];
$MoblieNo = $_POST['MoblieNo'];
$email = $_POST['email'];
$collegename = $_POST['collegename'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$query="INSERT INTO `registertable`(`name`, `age`, `number`, `email`, `college name`, `gender`, `country`) 
VALUES ('$username','$Age','$MoblieNo','$email','$collegename','$gender','$city')";
$insertquery=mysqli_query($conn,$query);
if($insertquery){
    echo "<script>alert('register completed')</script>";
}else{
    echo "<script>alert('register incompleted')</script>";
}
}
?>
