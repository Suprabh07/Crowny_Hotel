<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowny Hotel | Setup</title>
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
    $sql1 = "CREATE TABLE `rooms` (
                     `room_no` INT NOT NULL,
                     `adults` INT NOT NULL,
                     `children` INT NOT NULL,
                     `avaliability` VARCHAR(5) NOT NULL,
                     `price` INT NOT NULL,
                     `in_date` DATE NULL DEFAULT NULL,
                     `out_date` DATE NULL DEFAULT NULL
                     ) ENGINE = InnoDB;";
    mysqli_query($conn, $sql1);
    $sql2 = "CREATE TABLE `subscribers` (
  `sl_no` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NOT NULL,
  `subscribed_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sl_no`)
) ENGINE = InnoDB;";
    mysqli_query($conn, $sql2);
    $sql3 = "CREATE TABLE `bookings` (
                     `room_no` INT NOT NULL,
                     `name` VARCHAR(20) NOT NULL,
                     `email` VARCHAR(50) NOT NULL,
                     `cin_date` DATE NOT NULL,
                     `cout_date` DATE NOT NULL,
                     `booking_time` DATETIME NOT NULL ,
                     PRIMARY KEY (`room_no`)
                     ) ENGINE = InnoDB;";
    mysqli_query($conn, $sql3);
    $sql4 = "INSERT INTO `rooms` (`room_no`, `adults`, `children`, `avaliability`, `price`) VALUES
(101, 2, 1, 'YES', 250),
(102, 2, 1, 'YES', 250),
(103, 2, 1, 'YES', 250),
(104, 2, 1, 'YES', 250),
(105, 2, 1, 'YES', 250),
(106, 2, 2, 'YES', 300),
(107, 2, 2, 'YES', 300),
(108, 2, 2, 'YES', 300),
(109, 2, 2, 'YES', 300),
(110, 2, 2, 'YES', 300),
(201, 3, 1, 'YES', 325),
(202, 3, 1, 'YES', 325),
(203, 3, 1, 'YES', 325),
(204, 3, 1, 'YES', 325),
(205, 3, 2, 'YES', 350),
(206, 3, 2, 'YES', 350),
(207, 3, 2, 'YES', 350),
(208, 3, 2, 'YES', 350),
(209, 3, 2, 'YES', 350),
(210, 3, 2, 'YES', 350),
(301, 4, 1, 'YES', 375),
(302, 4, 1, 'YES', 375),
(303, 4, 1, 'YES', 375),
(304, 4, 2, 'YES', 400),
(305, 4, 2, 'YES', 400),
(306, 4, 2, 'YES', 400),
(307, 4, 2, 'YES', 400),
(308, 4, 3, 'YES', 450),
(309, 4, 3, 'YES', 450),
(310, 4, 3, 'YES', 450);";
    mysqli_query($conn, $sql4);
    echo "<p style='color:green;'> Tables created successfully.</p>";
    echo "<h1 style='color:green;'> Setup complete!!!</h1>";
    ?>
</body>

</html>