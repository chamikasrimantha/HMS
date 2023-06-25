<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Wid = $_POST["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "DELETE FROM wardinfo WHERE Wid='$Wid'";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Successfully Deleted !") </script>';
    echo '<script type="text/javascript"> window.location = "wardinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "wardinfo.php"; </script>  ';
}
$conn->close(); 
?>