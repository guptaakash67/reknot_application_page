<?php
$username = $_POST['usernmae'];
$Age = $_POST['Age'];
$MoblieNo = $_POST['Moblie No'];
$email = $_POST['email'];
$college name = $_POST['college name'];
$gender = $_POST['gender'];
$city = $_POST['city'];


if (!empty($username)) || !empty($Age) || !empty($Moblie No) || !empty($email) || !empty($college name) || !empty($gender) || !empty($city){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "reknot solution";

//create connection
$conn = new mysqli($host, $username, $dbname, $dbname);

if (mysqli_connect_error()){
    die('connect error('. mysqli_connect_errno().')'. mysqli_connect_error());

} else{
    $SELECT = "SELECT email from register where email = ? limit 1";
    $INSERT = " INSERT Into register (username, Age, number, email, collegename, gender, country) values(?, ?, ?, ?, ?, ?, ?)"

    //prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s" $email);
    $stmt-> execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum==0) {
        $stmt->close();

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssii", $username, $Age, $number, $email, $collegename, $gender, $country);
        $stmt->execute();
        echo "New record inserted sucessfully";

    } else{
        echo "someone already register using this email";

    }
    $stmt->close();
    $conn->close();

}

} else{
    echo "All fieldnare required";

    die();
}
?>