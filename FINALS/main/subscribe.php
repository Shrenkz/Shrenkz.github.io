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
    $email = htmlspecialchars($_POST['email']);
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute() === TRUE) {
            echo "<script> 
              alert('Thank you for subscribing!');
              window.location.href = 'index.html';
            </script>";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "<script>
          alert('Please enter a valid email address.');
          window.location.href = 'index.html';
        </script>";
    }
}

$conn->close();
?>
