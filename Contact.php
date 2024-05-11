<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event management system</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <!-- Swiper Js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css" />


    <!-- Link Style Css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header/navbar start -->
    <header>
        <a href="#" class="logo">
            <img src="img/EMS3.png" alt="">
        </a>
        <nav class="navbar">
            <a href="index.html">Home</a>
            <a href="About.html">About Us</a>
            <a href="Service.html">Service</a>
            <a href="Gallery.html">Gallery</a>
            <a href="Review.html">Review</a>
            <a href="Contact.html">Book Now</a>
        </nav>
        <div class="fas fa-bars" id="menubtn"></div>
    </header>
    <!-- header/navbar end -->

    <!-- Contact form start -->
    <section id="Contact" class="contact">
        <h1 class="heading"><span>Book</span> Now</h1>

        <div class="row">
            <form action="index.php" method="post">
                <h3>Book Your Appointment</h3>
                <input type="text" name="Your_Name" required placeholder="Your-Name" class="box">
                <input type="email" name="email" required placeholder="Your Email" class="box">
                <input type="number" name="number" required placeholder="Your Number" class="box">
                <input type="date" name="DoB" required class="box">
                <button class="btn">Sumit <span class="fas fa-chevron-right"></span></button>
                <?php
                // Assuming your database credentials
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "appointment";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $yourName = $_POST['Your_Name'];
                    $email = $_POST['email'];
                    $number = $_POST['number'];
                    $dob = $_POST['DoB'];

                    // Insert data into the database
                    $sql = "INSERT INTO appointments (Your_Name, email, number, DoB) VALUES ('$yourName', '$email', '$number', '$dob')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Appointment booked successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }

                // Close connection
                $conn->close();
                ?>
            </form>

            <div class="img">
                <img src="img/wedding-pic.avif" alt="">
            </div>
        </div>
    </section>
    <!-- Contact form end -->

    <!-- footer section start -->
    <footer>
        <a href="#">&copy; CopyRight</a>
    </footer>
    <!-- footer section end -->

    <!-- Swiper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"></script>

    <!-- Script for Js -->
    <script src="index.js"></script>
</body>

</html>