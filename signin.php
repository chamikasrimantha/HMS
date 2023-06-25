<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hms";
$Email = $_POST["email"];
$Password = $_POST["password"];

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}
session_start(); 


if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $Email = validate($_POST['email']);
    $Password = validate($_POST['password']);
    if (empty($Email)) {
        echo '<script> alert("Error! Username is required") </script>';
        echo '<script type="text/javascript"> window.location = "index.html"; </script>  ';
        exit();
    }else if(empty($Password)){
        echo '<script> alert("Error! Password is required") </script>';
        echo '<script type="text/javascript"> window.location = "index.html"; </script>  ';
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE Email='$Email' AND Password='$Password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['Email'] === $Email && $row['Password'] === $Password) {
                // echo "Logged in!";
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Password'] = $row['Password'];
                echo '<script> alert("Successfully Signed In!") </script>';
                echo '<script type="text/javascript"> window.location = "users/home/home.html"; </script>  ';
                exit();
            }else{
                echo '<script> alert("Error! Incorrect Username or Password") </script>';
                echo '<script type="text/javascript"> window.location = "index.html"; </script>  ';
                exit();
            }
        }else{
            echo '<script> alert("Error! Incorrect Username or Password") </script>';
            echo '<script type="text/javascript"> window.location = "index.html"; </script>  ';
            exit();
        }
    }
}else{
    echo '<script> alert("Error!") </script>';
    echo '<script type="text/javascript"> window.location = "index.html"; </script>  ';
    exit();
}
$conn->close(); 
?>