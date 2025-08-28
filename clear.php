<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowny Hotel | Clear</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel_management";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql1 = "UPDATE rooms SET avaliability = 'YES', in_date = null, out_date = null";
    mysqli_query($conn, $sql1);
    $sql2="TRUNCATE TABLE bookings";
    mysqli_query($conn, $sql2);
    $sql2="TRUNCATE TABLE subscribers";
    mysqli_query($conn, $sql2);
    echo "<p style='color:green;'>All bookings and room availability have been cleared.</p>";
    ?>
</body>
</html>