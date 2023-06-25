<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Name = $_POST["name"];
$Email = $_POST["email"];
$Mobile = $_POST["phoneno"];
$Message = $_POST["message"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "INSERT INTO contactinfo (Name, Email, Mobile, Message) VALUES ('$Name', '$Email', '$Mobile', '$Message')";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Successfully Sent !") </script>';
    echo '<script type="text/javascript"> window.location = "contactus.html"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "contactus.html"; </script>  ';
}
$conn->close(); 
?>