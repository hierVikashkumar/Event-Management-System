
<form action="test.php" method="post">
                <h3>Book Your Appointment</h3>
                <input type="text" name="Your_Name" required placeholder="Your-Name" class="box">
                <input type="email" name="email" required placeholder="Your Email" class="box">
                <input type="text" name="number" required placeholder="Your Number" class="box">
                <input type="date" name="DoB" required class="box">
                <button class="btn">Sumit <span class="fas fa-chevron-right"></span></button>
            </form>

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
