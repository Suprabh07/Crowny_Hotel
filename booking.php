<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowny Hotel | Booking</title>
    <link rel="stylesheet" href="booking_style.css">
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
                <img src="logo-2.png" alt="">
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
    <div class="backgroundimage">
        <div class="bgimg2">
            <div class="booking">
                <h1>Crow<span>ny</span> Hotel</h1>
                <h3>Room Booking</h3><br><br>
                <div class="form">
                    <form action="book_confirm.php" method="post" target="_self">
                        <label for="name">Name:</label>
                        <input type="text" name="name">


                        <label for="email">Email:</label>
                        <input type="text" name="name2">


                        <label for="checkin">Check-in Date:</label>
                        <input class="dateInput" type="date" name="checkin">


                        <label for="checkout">Check-out Date:</label>
                        <input class="dateInput" type="date" name="checkout">


                        <label for="adults">Number of Adults:</label>
                        <input type="number" name="adults">


                        <label for="children">Number of Children:</label>
                        <input type="number" name="children">

                        <div class="news">
                            <input type="checkbox" name="subscribe">
                            <label for="subscribe">Do you wan't to subscribe to our newsletter</label>
                        </div>

                        <div class="terms">
                            <input type="checkbox" name="terms" required>
                            <label for="terms">I confirm that I have read the <a href="#">terms and
                                    conditions</a></label>
                        </div>


                        <button class="submit" type="submit">BOOK NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>