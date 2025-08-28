<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowny Hotel | Booking</title>
    <link rel="stylesheet" href="bookconfirm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr' crossorigin='anonymous'> -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
</head>

<body>
    <header>
        <div class="content flex_space navbar">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="index.php" target="_self">home</a> </li>
                    <li><a href="index.php#about" target="_self">about</a> </li>
                    <li><a href="index.php#room" target="_self">rooms</a> </li>
                    <li><a href="index.php#news" target="_self">news</a> </li>
                    <li><a href="index.php#contact" target="_self">contact</a> </li>
                </ul>
                <span class="fa fa-bars" onclick="menutoggle()"></span>
            </div>
        </div>
    </header>
    <div class="display">
        <div class="opaque">
            <h1>Crow<span>ny</span> Hotel</h1>
            <h3>Room Booking</h3><br><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "hotel_management";
                $conn = mysqli_connect($servername, $username, $password, $database);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $name = $_POST['name'] ?? '';
                // $email = $_POST['email'] ?? '';
                $email = $_POST['name2'];
                $checkin = $_POST['checkin'] ?? '';
                $checkout = $_POST['checkout'] ?? '';
                $adults = $_POST['adults'] ?? '';
                $children = $_POST['children'] ?? '';
                $news = isset($_POST['subscribe']) ? 1 : 0;
                $terms = isset($_POST['terms']) ? 1 : 0;
                $room = 0;
                $price = 0;
                $timestamp1 = strtotime($checkin);
                $timestamp2 = strtotime($checkout);
                $diffInSeconds = abs($timestamp2 - $timestamp1);
                $diffInDays = $diffInSeconds / (60 * 60 * 24);

                date_default_timezone_set("Asia/Kolkata");
                $currentDateTime = date("Y-m-d H:i:s");
                if ($news == 1) {
                    $val = 0;
                    $sql = "SELECT * FROM subscribers";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['email'] == $email) {
                            $val = 1;
                            break;
                        }
                    }
                    if ($val == 0) {
                        $insert = "INSERT INTO subscribers (email) VALUES ('$email')";
                        mysqli_query($conn, $insert);
                    }
                }
                if ($terms == 1) {
                    if ($checkin < $checkout) {
                        $sql = "SELECT * FROM rooms WHERE avaliability = 'YES'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['adults'] >= $adults && $row['children'] >= $children && $row['in_date'] == null && $row['out_date'] == null) {
                                $room = $row['room_no'];
                                $price = $row['price'];
                                $price = $price * $diffInDays;
                                break;
                            }
                        }
                        if ($room == 0) {
                            echo "<p style='color:red;'>No rooms available for the selected criteria.</p>";
                        } else {
                            $sql = "INSERT INTO bookings (room_no , name, email, cin_date, cout_date, booking_time) VALUES ('$room','$name', '$email', '$checkin', '$checkout', '$currentDateTime')";
                            $sql2 = "UPDATE rooms SET avaliability = 'NO', in_date = '$checkin', out_date = '$checkout' WHERE room_no = '$room'";
                            mysqli_query($conn, $sql2);
                            if (mysqli_query($conn, $sql)) {
                                echo "<h1 style='color:green;'>Booking successful!!</h1>";
                                echo "<h4 style='color:white;'>Your room number is $room.</h4>";
                                echo "<h4 style='color:white;'>Total price for your stay is $$price. Please pay during the checkin</h4>";
                                echo "<h4 style='color:white;'>Thank you for choosing Crow<span style='color:#7fc142'>ny</span> Hotel!</h4>";
                            } else {
                                echo "<h4 style='color:red;'>Error: " . mysqli_error($conn) . "</h4>";
                            }
                        }
                    } else {
                        echo "<h2 style='color:red;'>Booking Unsuccessful!!!</h2>";
                        echo "<h4 style='color:white;'>Check-in date must be before check-out date.</h4>";
                    }
                } else {
                    echo "<h2 style='color:red;'>Booking Unsuccessful!!!</h2>";
                    echo "<h4 style='color:white;'>Please accept the terms and conditions.</h4>";
                }
            }

            ?>
        </div>
    </div>
</body>

</html>