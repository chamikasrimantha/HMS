<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../users/assets/images/fav.jpg">
    <link rel="stylesheet" href="../patientinfo/patientinfo.css">
    <title>Book Info</title>
    <style>
        .ddd1{
            padding-top: 30px;
        }
        .wdd {
            height: 25px;
        }
        .rrooww {
            margin-top: 20px;
            margin-left: 300px;
            color: white;
            height: 250px;
            width: 370px;
            background-color: gray;
            padding-left: 30px;
            padding-top: 20px;
            font-size: 14px;
            border-radius: 17px;
        }
        .p1p1{
            padding-top: 5px;
            padding-left: 20px;
        }
        .form3{
            margin-top: 120px;
        }
        .p2p2{
            margin-left: 125px;
            font-size: 18px;
            padding-bottom: 10px;
            color: white;
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
        <a class="wdd" href="staffinfo.php">Staff</a>
        <a class="wdd" href="../invoice/invoice.php">Patient Invoices</a>
        <a class="wdd" href="../usersinfo/usersinfo.php">Users</a>
        <a class="active wdd" href="bookinfo.php">Book Info</a>
        <a class="wdd" href="../contactinfo/contactinfo.php">Contact Info</a>
    </div>

    <!-- Page content -->
    <div class="content">
        <div class="wdd2">
            <p class="pp3">Arogya Health Care</strong></p>
            <p class="pp1">Hello <strong>Admin !</strong></p>
        </div>
        <div>
        <form action="booked.php" class="form3" method="post" name="login">
                <h1 class="login-title">Delete ✓ (successfull) Appointments</h1>
                <input type="text" class="login-input" name="name" placeholder="Name" autofocus="true" />
                <input type="submit" value="DELETE" name="submit" class="login-button" />
            </form>
            <!-- <div class="ddd1">
                <h2>Book Info</h2>
            </div> -->
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

$sql = "SELECT Yname, Yaddress, Yphoneno, Gender, Yemail, Date, Department, Procedures, Note FROM bookinfo";
$result = $conn -> query($sql);

// echo "<table border='1'>
// <tr>
// <th>Name</th>
// <th>Address</th>
// <th>Phone No</th>
// <th>Gender</th>
// <th>Email</th>
// <th>Date</th>
// <th>Department</th>
// <th>Procedures</th>
// <th>Note</th>
// </tr>";

// while($row = $result->fetch_assoc())
//   {
//   echo "<tr>";
//   echo "<td>" . $row['Yname'] . "</td>";
//   echo "<td>" . $row['Yaddress'] . "</td>";
//   echo "<td>" . $row['Yphoneno'] . "</td>";
//   echo "<td>" . $row['Gender'] . "</td>";
//   echo "<td>" . $row['Yemail'] . "</td>";
//   echo "<td>" . $row['Date'] . "</td>";
//   echo "<td>" . $row['Department'] . "</td>";
//   echo "<td>" . $row['Procedures'] . "</td>";
//   echo "<td>" . $row['Note'] . "</td>";
//   echo "</tr>";
//   }
// echo "</table>";

while ($row = $result->fetch_assoc())
{
    echo "<div class='rrooww'>";
    echo "<p class='p2p2'>New Book</p>";
    echo "<p class='p1p1'> Name: $row[Yname] </p>";
    echo "<p class='p1p1'> Address: $row[Yaddress] </p>";
    echo "<p class='p1p1'> Phone No: $row[Yphoneno] </p>";
    echo "<p class='p1p1'> Gender: $row[Gender] </p>";
    echo "<p class='p1p1'> Email: $row[Yemail] </p>";
    echo "<p class='p1p1'> Date: $row[Date] </p>";
    echo "<p class='p1p1'> Department: $row[Department] </p>";
    echo "<p class='p1p1'> Procedures: $row[Procedures] </p>";
    echo "<p class='p1p1'> Note: $row[Note] </p>";
    echo "</div>";
}


$conn -> close();
?>
    </div>


</body>

</html>