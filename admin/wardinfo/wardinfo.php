<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../patientinfo/patientinfo.css">
    <link rel="stylesheet" href="wardinfo.css">
    <link rel="shortcut icon" href="../../users/assets/images/fav.jpg">
    <title>Wards Info</title>
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
        <a class="active wdd" href="wardinfo.php">Ward Availability</a>
        <a class="wdd" href="../staffinfo/staffinfo.php">Staff</a>
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
            <form action="insert.php" class="form11" method="post" name="login">
                <h1 class="login-title">Ward Information / Insert</h1>
                <input type="text" class="login-input" name="id" placeholder="Ward ID" autofocus="true" />
                <select class="custom-select" name="type" autofocus="true">
                    <option value="Heart">Heart</option>
                    <option value="Mental">Mental</option>
                    <option value="ICU">ICU</option>
                    <option value="lll">lll</option>
                </select>
                <select class="custom-select" name="open">
                    <option value="Open">Open</option>
                    <option value="Closed">Closed</option>
                </select>
                <input type="datetime-local" class="login-input" name="time" placeholder="Staff's Name" />
                <input type="submit" value="Add" name="submit" class="login-button" />
            </form>
            <form action="update.php" class="form22" method="post" name="login">
                <h1 class="login-title">Ward Information / Update</h1>
                <input type="text" class="login-input" name="id" placeholder="Ward ID" autofocus="true" />
                <select class="custom-select" name="type" autofocus="true">
                    <option value="Heart">Heart</option>
                    <option value="Mental">Mental</option>
                    <option value="ICU">ICU</option>
                    <option value="lll">lll</option>
                </select>
                <select class="custom-select" name="open">
                    <option value="Open">Open</option>
                    <option value="Closed">Closed</option>
                </select>
                <input type="datetime-local" class="login-input" name="time" placeholder="Staff's Name" />
                <input type="submit" value="Update" name="submit" class="login-button" />
            </form>
            <form action="delete.php" class="form33" method="post" name="login">
                <h1 class="login-title">Ward Information / Delete</h1>
                <input type="text" class="login-input" name="id" placeholder="Ward ID" autofocus="true" />
                <input type="submit" value="Delete" name="submit" class="login-button" />
            </form>
            <div class="ddd1">
                <h2>Wards Info</h2>
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

$sql = "SELECT Wid, Wtype, Wopen, Wtime FROM wardinfo";
$result = $conn -> query($sql);

echo "<table border='1'>
<tr>
<th>Id</th>
<th>Type</th>
<th>Open/ Closed</th>
<th>Time</th>
</tr>";

while($row = $result->fetch_assoc())
  {
  echo "<tr>";
  echo "<td>" . $row['Wid'] . "</td>";
  echo "<td>" . $row['Wtype'] . "</td>";
  echo "<td>" . $row['Wopen'] . "</td>";
  echo "<td>" . $row['Wtime'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
$conn -> close();
?>
    </div>


</body>

</html>