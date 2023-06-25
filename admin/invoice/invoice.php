<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../users/assets/images/fav.jpg">
    <title>Invoice Generater</title>

    <style>
        .login-input1 {
            font-size: 15px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 25px;
            height: 10px;
            width: calc(100% - 680px);
        }
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
        <a class="wdd" href="../staffinfo/staffinfo.php">Staff</a>
        <a class="active wdd" href="invoice.php">Patient Invoices</a>
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
            <form action="pdf.php" class="form" method="post" name="login">
                <h1 class="login-title">Invoice</h1>
                <input type="text" class="login-input" name="id" placeholder="Invoice No" autofocus="true" />
                <input type="text" class="login-input" name="date" placeholder="Invoice Date" autofocus="true" />
                <input type="text" class="login-input" name="pname" placeholder="Patient Name" autofocus="true" />
                <input type="text" class="login-input" name="paddress" placeholder="Patient Address" autofocus="true" />
                <input type="text" class="login-input1" name="ino[]" placeholder="Item No" autofocus="true" />
                <input type="text" class="login-input1" name="iname[]" placeholder="Item Name" autofocus="true" />
                <input type="text" class="login-input1" name="iamount[]" placeholder="Item Amount" autofocus="true" />
                <button style="width: 75px; height: 30px; background-color: gray; border: 0; outline: 0; cursor: pointer; color: white;" type="button" onclick="add()">Add</button>
                <button style="width: 75px; height: 30px; background-color: gray; border: 0; outline: 0; cursor: pointer; color: white;" type="button" onclick="remove()">Remove</button>
                <div id="new_chq"></div>
                <input type="hidden" value="1" id="total_chq">
                <input type="text" class="login-input" name="total" placeholder="Total (Rs.)" autofocus="true" />
                <input type="text" class="login-input" name="totalwwords" placeholder="Total (Amount in words)" autofocus="true" />
                <input type="text" class="login-input" name="signature" placeholder="Signature (Your Name)" autofocus="true" />
                <input type="submit" value="Generate" name="submit" class="login-button" />
            </form>
        </div>
    </div>


    <script>
        function add() {
            var new_chq_no = parseInt($('#total_chq').val()) + 1;
            var new_input = "<input placeholder='Item No' class='login-input1' name='ino[]' type='text' id='new_" + new_chq_no + "'> <input placeholder='Item Name' class='login-input1' name='iname[]' type='text' id='new_" + new_chq_no + "'> <input placeholder='Item Amount' class='login-input1' name='iamount[]' type='text' id='new_" + new_chq_no + "'>";
            $('#new_chq').append(new_input);
            $('#total_chq').val(new_chq_no);
        }
        function remove() {
            var last_chq_no = $('#total_chq').val();
            if (last_chq_no > 1) {
                $('#new_' + last_chq_no).remove();
                $('#new_' + last_chq_no).remove();
                $('#new_' + last_chq_no).remove();
                $('#total_chq').val(last_chq_no - 1);
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

</html>