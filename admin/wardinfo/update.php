<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Wid = $_POST["id"];
$Wtype = $_POST["type"];
$Wopen = $_POST["open"];
$Wtime = $_POST["time"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "UPDATE wardinfo SET Wtype='$Wtype', Wopen='$Wopen', Wtime='$Wtime' WHERE Wid='$Wid'";

if ($conn -> query($sql) === TRUE){
    echo '<script> alert("Successfully Updated !") </script>';
    echo '<script type="text/javascript"> window.location = "wardinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "wardinfo.php"; </script>  ';
}

$conn->close(); 
?>