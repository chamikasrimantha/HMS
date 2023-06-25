<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="shortcut icon" href="../assets/images/fav.jpg">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />    
    <title>Arogya Health Care | Wards Info</title>
    <style>
table {
    margin-top: 20px;
    font-family: poppins;
    border-collapse: collapse;
    width: 90%;
    margin-left: 55px;
}

th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: #55a1ff;
    color: white;
}

td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: #dddddd;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.ddddd{
    margin-top: 20px;
}
.fcve {
            background-color: rgb(44, 43, 43);
        }

        .fcve1 {
            font-size: 18px;
            padding-top: 5px;
            color: white;
        }

        .fcve2 {
            text-align: right;
            padding-right: 20px;
            font-size: 17px;
            color: white;
        }
        .slider-detail { 
            height: 900px;
        }
    </style>
</head>

<body>
<header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> arogya@healthcare.com</li>
                            <li><i class="fas fa-phone-square"></i> +94 77 100 2020</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a><i class="fab fa-instagram"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                    <p style="padding-top: 22px; font-size: 23px; margin-left: -20px; color: blue;"><strong>Arogya Health Care</strong></p>
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="../home/home.html">Home</a></li>
                            <li><a href="../aboutus/aboutus.html">About Us</a></li>
                            <li><a href="../services/services.html">Services</a></li>
                            <li><a href="../contactus/contactus.html">Contact Us</a></li>
                            <li><a href="wardsinfo.php">Wards Info</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                    <button onclick="window.location.href='../book/book.html';" type="button" class="btn btn-info">Book an Appointment</button>
                    </div>
                </div>

            </div>
        </div>

    </header>


    <div class="slider-detail">

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

<footer class="fcve copy">
        <div class="container">
            <a class="fcve1">Arogya Health Care</a>
            <span>
                <p class="fcve2">3 De Fonseka Pl, Colombo 00400</p>
            </span>
        </div>
    </footer>

    <div class="copy">
        <div class="container">
            <a href="https://chamika-srimantha.me">2023 &copy; All Rights Reserved | Designed and Developed by
                Apex Design Works</a>

            <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>

    </div>


</body>

</html>