<!DOCTYPE html>
<html>

<head>
    <title>Tour Booking Result</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/564x/67/82/87/6782877ed069abd6834c6295b9cf0312.jpg');
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            background: linear-gradient(to bottom, #363636, #000000);
            padding: 10px;
            color: #ffffff;
        }

        p {
            background: linear-gradient(to bottom, #333333, #111111);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        p.success {
            background: linear-gradient(to bottom, #00b894, #55efc4);
        }

        p.error {
            background: linear-gradient(to bottom, #d63031, #e84393);
        }

        p,
        h1 {
            margin: 10px;
        }
    </style>
</head>

<body>
    <h1>Booking Status</h1>
    <?php
    // Establish a database connection
    $con = mysqli_connect("localhost", "root", "root","abc");

    // Check the connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Select the database
    $database_selected = mysqli_select_db($con, "abc");

    // Check if the database selection was successful
    if (!$database_selected) {
        die("Database selection failed: " . mysqli_error($con));
    }

    // Get form input data and sanitize them
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $PhoneNo = mysqli_real_escape_string($con, $_POST['PhoneNo']);
    $Destination = mysqli_real_escape_string($con, $_POST['Destination']);
    $Package = mysqli_real_escape_string($con, $_POST['Package']);
    $Payment = mysqli_real_escape_string($con, $_POST['Payment']);
    $IFSC = mysqli_real_escape_string($con, $_POST['IFSC']);
    $AccountNo = mysqli_real_escape_string($con, $_POST['AccountNo']);
    $AccountName = mysqli_real_escape_string($con, $_POST['AccountName']);

    // Create and execute the SQL query
    $sql = "INSERT INTO bookings VALUES('$Name', '$Email', '$PhoneNo', '$Destination', '$Package', '$Payment', '$IFSC', '$AccountNo', '$AccountName')";

    if (mysqli_query($con, $sql)) {
        echo "<p class='success'>SUCCESSFULLY BOOKED</p>";
    } else {
        echo "<p class='error'>Error: " . $sql . "<br>" . mysqli_error($con) . "</p>";
    }

    // Close the database connection
    mysqli_close($con);
    ?>
</body>

</html>
