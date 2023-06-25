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

$sql = "UPDATE patientinfo SET Pname='$Pname', Pno='$Pno', Ptype='$Ptype', Paddress='$Paddress' WHERE Pid='$Pid'";

if ($conn -> query($sql) === TRUE){
    echo '<script> alert("Successfully Updated !") </script>';
    echo '<script type="text/javascript"> window.location = "patientinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "patientinfo.php"; </script>  ';
}

$conn->close(); 
?>