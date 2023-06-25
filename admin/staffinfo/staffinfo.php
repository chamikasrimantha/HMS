<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../patientinfo/patientinfo.css">
    <link rel="shortcut icon" href="../../users/assets/images/fav.jpg">
    <title>Staff Info</title>
    <style>
        .wdd {
            height: 25px;
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
        <a class="active wdd" href="staffinfo.php">Staff</a>
        <a class="wdd" href="../invoice/invoice.php">Patient Invoices</a>
        <a class="wdd" href="../usersinfo/usersinfo.php">Users</a>
        <a class="wdd" href="../bookinfo/bookinfo.php">Book Info</a>
        <a class="wdd" href="../contactinfo/contactinfo.php">Contact Info</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="wdd2">
            <p class="pp3">Arogya Health Care</strong></p>
            <p class="pp1">Hello <strong>Admin !</strong></p>
        </div>
        <div>
            <form action="insert.php" class="form1" method="post" name="login">
                <h1 class="login-title">Staff Information / Insert</h1>
                <input type="text" class="login-input" name="id" placeholder="Staff's ID" autofocus="true" />
                <input type="text" class="login-input" name="name" placeholder="Staff's Name" />
                <input type="text" class="login-input" name="email" placeholder="Staff's Email" />
                <input type="text" class="login-input" name="phoneno" placeholder="Staff's Phone No" />
                <input type="text" class="login-input" name="address" placeholder="Staff's Address" />
                <input type="submit" value="Add" name="submit" class="login-button" />
            </form>
            <form action="update.php" class="form2" method="post" name="login">
                <h1 class="login-title">Staff Information / Update</h1>
                <input type="text" class="login-input" name="id" placeholder="Staff's ID" autofocus="true" />
                <input type="text" class="login-input" name="name" placeholder="Staff's Name" />
                <input type="text" class="login-input" name="email" placeholder="Staff's Email" />
                <input type="text" class="login-input" name="phoneno" placeholder="Staff's Phone No" />
                <input type="text" class="login-input" name="address" placeholder="Staff's Address" />
                <input type="submit" value="Update" name="submit" class="login-button" />
            </form>
            <form action="delete.php" class="form3" method="post" name="login">
                <h1 class="login-title">Staff Information / Delete</h1>
                <input type="text" class="login-input" name="id" placeholder="Staff's ID" autofocus="true" />
                <input type="submit" value="Delete" name="submit" class="login-button" />
            </form>
            <div class="ddd1">
                <h2>Staff Info</h2>
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

$sql = "SELECT Sid, Sname, Smail, Sno, Saddress FROM staffinfo";
$result = $conn -> query($sql);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone No</th>
<th>Address</th>
</tr>";

while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row['Sid'] . "</td>";
  echo "<td>" . $row['Sname'] . "</td>";
  echo "<td>" . $row['Smail'] . "</td>";
  echo "<td>" . $row['Sno'] . "</td>";
  echo "<td>" . $row['Saddress'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$conn -> close();
?>
    </div>


</body>

</html>