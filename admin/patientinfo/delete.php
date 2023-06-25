<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Pid = $_POST["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "DELETE FROM patientinfo WHERE Pid='$Pid'";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Successfully Deleted !") </script>';
    echo '<script type="text/javascript"> window.location = "patientinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "patientinfo.php"; </script>  ';
}
$conn->close(); 
?>