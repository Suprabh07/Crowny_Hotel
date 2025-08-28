<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crowny Hotel</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="index.php">home</a> </li>
                    <li><a href="#about">about</a> </li>
                    <li><a href="#room">rooms</a> </li>
                    <li><a href="#news">news</a> </li>
                    <li><a href="#contact">contact</a> </li>
                    <li> <button class="primary-btn" onclick="window.location.href='booking.php'">BOOK NOW</button> </li>
                </ul>
                <span class="fa fa-bars" onclick="menutoggle()"></span>
            </div>
        </div>
    </header>


    <script>
        var menulist = document.getElementById('menulist');
        menulist.style.maxHeight = "0px";

        function menutoggle() {
            if (menulist.style.maxHeight == "0px") {
                menulist.style.maxHeight = "100vh";
            } else {
                menulist.style.maxHeight = "0px";
            }
        }
    </script>


    <section class="home">
        <div class="content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="banner-1.png" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>Experience royal comfort and modern elegance at Crowny Hotel, </p>
                        <p>where every stay feels like a crowning moment.
                        </p>
                        <div class="flex">
                            <button class="primary-btn" ><a href="#about">READ MORE</a></button>
                            <button class="secondary-btn"><a href="#contact">CONTACT US</a></button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src=" banner-2.png" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>Experience royal comfort and modern elegance at Crowny Hotel, </p>
                        <p>where every stay feels like a crowning moment.
                        </p>
                        <div class="flex">
                            <button class="primary-btn" ><a href="#about">READ MORE</a></button>
                            <button class="secondary-btn"><a href="#contact">CONTACT US</a></button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src=" banner-3.png" alt="">
                    <div class="text">
                        <h1>Spend Your Holiday</h1>
                        <p>Experience royal comfort and modern elegance at Crowny Hotel, </p>
                        <p>where every stay feels like a crowning moment.
                        </p>
                        <div class="flex">
                            <button class="primary-btn" ><a href="#about">READ MORE</a></button>
                            <button class="secondary-btn"><a href="#contact">CONTACT US</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>




    <section class="book">
        <div class="container flex_space">
            <div class="text">
                <h1> <span>Book </span> Your Rooms </h1>
            </div>
            <div class="form">
                <form id="form_check" class="grid" action="index.php" method="post" target="_self">
                    Check in date
                    <input type="date" name="cindate" placeholder="Arrival Date">
                    Check out date
                    <input type="date" name="coutdate" placeholder="Departure Date">
                    Enter the number of guests
                    <input type="number" name="adults" placeholder="Adults">
                    <input type="number" name="children" placeholder="Children">
                    <input type="submit" value="CHECK AVAILABILITY" class="submit-btn primary-btn" name="check_availiability">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check_availiability'])) {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "hotel_management";
                    $room_avail = 0;

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $cindate = $_POST['cindate'] ?? '';
                    $coutdate = $_POST['coutdate'] ?? '';
                    $adults = $_POST['adults'] ?? 0;
                    $children = $_POST['children'] ?? 0;
                    if($cindate<
                    $coutdate) {
                        $sql = "SELECT * FROM rooms WHERE avaliability = 'YES'";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['adults'] == $adults && $row['children'] == $children && $row['in_date']==null && $row['out_date']==null) {
                                $room_avail = 1;
                                break;
                            }
                        }
                        if ($room_avail == 1) {
                            echo "<h2>Room is available for booking</h2>";
                        } else {
                            echo "<h2>Room is not available for booking</h2>";
                        }
                    }
                    else {
                        echo "<h2>Check-in date must be before check-out date</h2>";
                    }
                }
                ?>
            </div>
        </div>
    </section>



    <section class="about top" id="about">
        <div class="container flex">
            <div class="left">
                <div class="heading">
                    <h1>WELCOME</h1>
                    <h2>Crowny Hotel</h2>
                </div>
                <p>Step into a world of timeless luxury and heartfelt hospitality. At Crowny Hotel, we believe your stay
                    should be more than just accommodation—it should be an experience. Whether you're here for business
                    or leisure, our sophisticated rooms, world-class dining, and attentive service ensure that every
                    moment is tailored to your comfort.Discover the charm of serene surroundings, indulge in exquisite
                    flavors, and let us take care of the rest.
                </p>
            </div>
            <div class="right">
                <img src=" about.png" alt="">
            </div>
        </div>
    </section>

    <section class="counter top" >
        <div class="container grid">

            <div class="box">
                <h1>30</h1>
                <hr>
                <span>Luxury Rooms</span>
            </div>
            <div class="box">
                <h1>9875</h1>
                <hr>
                <span>Happy Customers</span>
            </div>
            <div class="box">
                <h1>143</h1>
                <hr>
                <span>Expert Technicians</span>
            </div>
            <div class="box">
                <h1>182</h1>
                <hr>
                <span>Maintenance Staff</span>
            </div>
        </div>
    </section>


    <section id="room" class="rooms">
        <div class="container top" >
            <div class="heading">
                <h1>EXPOLRE</h1>
                <h2>Our Rooms</h2>
                <p>Experience exceptional comfort and elegance in every detail—our rooms are designed to <br>offer a
                    perfect blend of luxury and relaxation.
                </p>
            </div>

            <div class="content mtop">
                <div class="owl-carousel owl-carousel1 owl-theme">
                    <div class="items">
                        <div class="image">
                            <img src=" room-1.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Single Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Maximize your stay with our efficiently designed Single Rooms, perfect for business or
                                solo travelers seeking 5-star comfort and seamless productivity.
                            </p>
                            <div class="button1 flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$250 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-2.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Deluxe Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Elevate your experience in our Deluxe Rooms—spacious, stylish, and thoughtfully equipped
                                for both indulgent relaxation and productive stays.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$300 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-3.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Resorts</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Unwind and recharge in our premium resort rooms—where serene luxury meets modern
                                amenities for a perfectly balanced escape or focused retreat.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$450 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-4.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Single Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Maximize your stay with our efficiently designed Single Rooms, perfect for business or
                                solo travelers seeking 5-star comfort and seamless productivity.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$250 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-5.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Deluxe Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Elevate your experience in our Deluxe Rooms—spacious, stylish, and thoughtfully equipped
                                for both indulgent relaxation and productive stays.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$300 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-6.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Resorts</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Unwind and recharge in our premium resort rooms—where serene luxury meets modern
                                amenities for a perfectly balanced escape or focused retreat.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$450 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-7.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Single Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Maximize your stay with our efficiently designed Single Rooms, perfect for business or
                                solo travelers seeking 5-star comfort and seamless productivity.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$250 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" room-8.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Deluxe Rooms</h2>
                            <div class="rate flex">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Elevate your experience in our Deluxe Rooms—spacious, stylish, and thoughtfully equipped
                                for both indulgent relaxation and productive stays.
                            </p>
                            <div class="button flex">
                                <a href="booking.php"><button class="primary-btn">BOOK NOW</button></a>
                                <h3>$300 <span> <br> Per Night </span> </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.owl-carousel1').owlCarousel({
            loop: true,
            margin: 40,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2,
                    margin: 10,
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>



    <section class="gallery">
        <div class="container top">
            <div class="heading">
                <h1>PHOTOS</h1>
                <h2>Our Gallery</h2>
                <p>Discover the elegance of Crowny Hotel through our curated gallery of luxurious rooms, serene
                    views,<br> and world-class amenities.
            </div>
        </div>

        <div class="content mtop">
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div class="items">
                    <div class="img">
                        <img src=" gallery-1.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-2.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-3.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-4.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-5.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-6.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-4.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-3.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-1.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
                <div class="items">
                    <div class="img">
                        <img src=" gallery-6.png" alt="">
                    </div>
                    <div class="overlay">
                        <span class="fa fa-plus"> </span>
                        <h3>Photo Title Here.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        $('.owl-carousel1').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 4,
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>


    <section class="services top">
        <div class="container">
            <div class="heading">
                <h1>SERVICES</h1>
                <h2>Our Services</h2>
                <p>🍽️ Delicious Food, 🏋️‍♀️ Fitness, 🍷 Inhouse Restaurant, 💆‍♀️ Beauty Spa — Enjoy gourmet dining,
                    energizing workouts, cozy inhouse meals, and luxurious spa treatments all under one roof.
            </div>


            <div class="content flex_space">
                <div class="left grid2">
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-champagne-glasses"></i>
                            <h3>Delicious Food</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-person-biking"></i>
                            <h3>Fitness</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-utensils"></i>
                            <h3>Inhouse Restaurant</h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="text">
                            <i class="fa-solid fa-spa"></i>
                            <h3>Beauty Spa</h3>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <img src=" service.png" alt="">
                </div>
            </div>
        </div>
    </section>




    <section class="Customer top" id="Customer">
        <div class="container">
            <div class="owl-carousel owl-carousel2 owl-theme">
                <div class="item">
                    <i class="fa-solid fa-quote-right"></i>
                    <p>Crowny Hotel exceeded all my expectations! From the moment I stepped into the grand lobby, I felt
                        pampered. The staff greeted me with genuine smiles and a welcome drink, and check-in was a
                        breeze. My single room was immaculate, with plush bedding, a smart workspace, and a stunning
                        city view. The breakfast buffet was a highlight—fresh fruits, live counters, and even South
                        Indian delicacies! I especially loved the rooftop infinity pool—it felt like a private oasis
                        above the bustle of the city. Can’t wait to return for a longer stay!
                    </p>
                    <h3>Priya Menon</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-quote-right"></i>
                    <p>I stayed at Crowny Hotel during a 3-day business conference, and it was a solid experience. The
                        location is prime—close to the tech hub and airport. My deluxe room had a sleek design,
                        ergonomic desk, and high-speed Wi-Fi, which made working from the room effortless. The in-room
                        dining was prompt and delicious, especially the butter chicken. The only downside was that the
                        gym was under renovation, but they offered complimentary access to a nearby fitness center.
                        Overall, a great blend of comfort and convenience for business travelers.
                    </p>
                    <h3>Arjun Desai</h3>
                </div>
                <div class="item">
                    <i class="fa-solid fa-quote-right"></i>
                    <p>Crowny Hotel made our anniversary truly magical. We booked a weekend getaway in one of their
                        resort-style suites, and it was pure bliss. The room had a private balcony overlooking the
                        gardens, a luxurious bathtub, and even a handwritten welcome note. The spa experience was
                        divine—aromatherapy and a couple’s massage that left us floating. The concierge went above and
                        beyond by arranging a surprise candlelight dinner by the pool, complete with live music and a
                        custom cake. It’s rare to find such thoughtful hospitality. We’ll cherish this memory forever.
                    </p>
                    <h3>Meera Kapoor</h3>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.owl-carousel2').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1,
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>



    <section class="news top rooms" id="news">
        <div class="container">
            <div class="heading">
                <h1>NEWS</h1>
                <h2>Our News</h2>
                <p>Stay informed with real-time updates, exclusive offers, seasonal events, and all the fresh happenings
                    at Crowny Hotel, where every moment brings something new to discover.
            </div>
            <div class="content flex">
                <div class="left grid2">
                    <div class="items">
                        <div class="image">
                            <img src=" blog-1.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Finibus bonorum malorm.</h2>
                            <div class="admin flex">
                                <i class="fa fa-user"></i>
                                <label>Rahul</label>
                                <i class="fa fa-heart"></i>
                                <label>1528</label>
                                <i class="fa fa-comments"></i>
                                <label>268</label>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="items">
                        <div class="image">
                            <img src=" blog-2.png" alt="">
                        </div>
                        <div class="text">
                            <h2>Finibus bonorum malorm.</h2>
                            <div class="admin flex">
                                <i class="fa fa-user"></i>
                                <label>Admin</label>
                                <i class="fa fa-heart"></i>
                                <label>500</label>
                                <i class="fa fa-comments"></i>
                                <label>268</label>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="box flex">
                        <div class="img">
                            <img src=" blog-s1.png" alt="">
                        </div>
                        <div class="stext">
                            <h2>Etiam Vel Nequ</h2>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                            </p>
                        </div>
                    </div>
                    <div class="box flex">
                        <div class="img">
                            <img src=" blog-s2.png" alt="">
                        </div>
                        <div class="stext">
                            <h2>Etiam Vel Nequ</h2>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                            </p>
                        </div>
                    </div>
                    <div class="box flex">
                        <div class="img">
                            <img src=" blog-s3.png" alt="">
                        </div>
                        <div class="stext">
                            <h2>Etiam Vel Nequ</h2>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="newsletter mtop">
        <div class="container">
            <div class="news1">
                <h1>Subscribe to Our Newsletter</h1>
                <form action="index.php" method="post" target="_self">
                    <input type="text" placeholder="Your Email" id="emailInput" name="email" required>
                    <input type="submit" value="Subscribe" id="submitBtn" name="newsletter">
                </form>
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newsletter'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "hotel_management";
                $conn = mysqli_connect($servername, $username, $password, $database);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                $message = "";
                $val = 0;
                $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

                if (!$email) {
                    $message = "⚠️ Please enter a valid email address.";
                } else {
                    $sql = "SELECT * FROM subscribers";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['email'] == $email) {
                            $message = "⚠️ This email is already subscribed.";
                            $val = 1;
                            break;
                        }
                    }
                    if ($val == 0) {
                        $insert = "INSERT INTO subscribers (email) VALUES ('$email')";
                        if (mysqli_query($conn, $insert)) {
                            $message = "✅ Successfully subscribed!";
                        } else {
                            $message = "❌ Error: " . mysqli_error($conn);
                        }
                    }
                }
                echo $message;
            }
            ?>
        </div>
    </section>






    <footer>
        <div class="container grid" id="contact">
            <div class="box">
                <img src=" logo-2.png" alt="">
                <p>Step into a world of timeless luxury and heartfelt hospitality. At Crowny Hotel, we believe your stay
                    should be more than just accommodation—it should be an experience. Whether you're here for business
                    or leisure, our sophisticated rooms, world-class dining, and attentive service ensure that every
                    moment is tailored to your comfort.Discover the charm of serene surroundings, indulge in exquisite
                    flavors, and let us take care of the rest.</p>

                <div class="icon">
                    <i class="fa fa-facebook-f"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-youtube"></i>
                </div>
            </div>

            <div class="box lists">
                <h2>Links</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="box">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtem por incid.
                </p>
                <i class="fa fa-location-dot"></i>
                <label>1201 park street, Avenue, Dhanmondy, Dhaka. </label> <br>
                <i class="fa fa-phone"></i>
                <label>[88] 657 524 332</label> <br>
                <i class="fa fa-envelope"></i>
                <label>info@dentar.com</label> <br>
            </div>
        </div>
    </footer>

    <div class="legal">
        <p class="container">Copyright (c) 2022 Copyright Holder All Rights Reserved.</p>
    </div>



    <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
</body>

</html>