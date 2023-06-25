<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../users/assets/images/fav.jpg">
    <link rel="stylesheet" href="../patientinfo/patientinfo.css">
    <title>Contact Info</title>
    <style>
        .wdd {
            height: 25px;
        }
        .ddd1{
            padding-top: 30px;
        }
    </style>
</head>

<body>

    <!-- The sidebar -->
    <div class="sidebar">
        <p class="wdd1 pp2"><strong>HMS</strong> </p>
        <a class="wdd" href="../dashboard/dashboard.html">Dashboard</a>
        <a class="wdd" href="../patientinfo/patientinfo.php">Patient Info</a>
        <a class="wdd" href="../wardinfo/wardinfo.php">Ward Availability</a>
        <a class="wdd" href="../staffinfo/staffinfo.php">Staff</a>
        <a class="wdd" href="../invoice/invoice.php">Patient Invoices</a>
        <a class="wdd" href="../usersinfo/usersinfo.php">Users</a>
        <a class="wdd" href="../bookinfo/bookinfo.php">Book Info</a>
        <a class="active wdd" href="contactinfo.php">Contact Info</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="wdd2">
            <p class="pp3">Arogya Health Care</strong></p>
            <p class="pp1">Hello <strong>Admin !</strong></p>
        </div>
        <div>
            <div class="ddd1">
                <h2>Contact Info</h2>
            </div>
        </div>

        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}

// echo "Connected Successfully !";

$sql = "SELECT Name, Email, Mobile, Message FROM contactinfo";
$result = $conn -> query($sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Message</th>
</tr>";

while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Mobile'] . "</td>";
  echo "<td>" . $row['Message'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$conn -> close();
?>
    </div>


</body>

</html>