<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Yname = $_POST["name"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "DELETE FROM bookinfo WHERE Yname='$Yname'";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Appointment Deleted !") </script>';
    echo '<script type="text/javascript"> window.location = "bookinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "bookinfo.php"; </script>  ';
}
$conn->close(); 
?>