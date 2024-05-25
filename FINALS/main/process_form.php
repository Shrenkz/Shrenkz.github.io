<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "lab5"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = htmlspecialchars($_POST['destination']);
    $people = htmlspecialchars($_POST['people']);
    $checkin = htmlspecialchars($_POST['checkin']);
    $checkout = htmlspecialchars($_POST['checkout']);

    if (!empty($destination) && !empty($people) && !empty($checkin) && !empty($checkout)) {

        $stmt = $conn->prepare("INSERT INTO bookings (destination, people, checkin, checkout) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $destination, $people, $checkin, $checkout);

        if ($stmt->execute() === TRUE) {
          echo "<script>
                  alert('Booking successfully saved in the database.');
                  window.location.href = 'index.html';
                </script>";
            exit;
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "<script>alert('All fields are required.');</script>";
    }
} else {
    echo "<script>alert('Invalid request method.');</script>";
}

$conn->close();
?>
