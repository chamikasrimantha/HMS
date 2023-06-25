<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Yname = $_POST["name"];
$Yaddress = $_POST["address"];
$Yphoneno = $_POST["phoneno"];
$Gender = $_POST["gender"];
$Yemail = $_POST["email"];
$Date = $_POST["time"];
$Department = $_POST["department"];
$Procedures = $_POST["procedure"];
$Note = $_POST["note"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

$sql = "INSERT INTO bookinfo (Yname, Yaddress, Yphoneno, Gender, Yemail, Date, Department, Procedures, Note) VALUES ('$Yname', '$Yaddress', '$Yphoneno', '$Gender', '$Yemail', '$Date', '$Department', '$Procedures', '$Note')";

if($conn -> query($sql) === TRUE) {
    echo '<script> alert("Booking Successfull !") </script>';
    echo '<script type="text/javascript"> window.location = "book.html"; </script>  ';
} else {
    echo '<script> alert("Error !") </script>';
    echo '<script type="text/javascript"> window.location = "book.httml"; </script>  ';
}
$conn->close(); 
?>