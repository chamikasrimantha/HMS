<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Sid = $_POST["id"];
$Sname = $_POST["name"];
$Smail = $_POST["email"];
$Sno = $_POST["phoneno"];
$Saddress = $_POST["address"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "INSERT INTO staffinfo (Sid, Sname, Smail, Sno, Saddress) VALUES ('$Sid', '$Sname', '$Smail', '$Sno', '$Saddress')";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Successfully Inserted !") </script>';
    echo '<script type="text/javascript"> window.location = "staffinfo.php"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "staffinfo.php"; </script>  ';
}
$conn->close(); 
?>