<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Fname = $_POST["fname"];
$Lname = $_POST["lname"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$PhoneNo = $_POST["phoneno"];
$Address = $_POST["address"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "INSERT INTO users (Fname, Lname, Email, Password, PhoneNo, Address) VALUES ('$Fname', '$Lname', '$Email', '$Password', '$PhoneNo', '$Address')";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Successfully SignUp !") </script>';
    echo '<script type="text/javascript"> window.location = "../../index.html"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "signup.html"; </script>  ';
}
$conn->close(); 
?>