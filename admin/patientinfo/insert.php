<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Pid = $_POST["id"];
$Pname = $_POST["name"];
$Pno = $_POST["phoneno"];
$Ptype = $_POST["type"];
$Paddress = $_POST["address"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "INSERT INTO patientinfo (Pid, Pname, Pno, Ptype, Paddress) VALUES ('$Pid', '$Pname', '$Pno', '$Ptype', '$Paddress')";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Successfully Inserted !") </script>';
    echo '<script type="text/javascript"> window.location = "patientinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "patientinfo.php"; </script>  ';
}
$conn->close(); 
?>