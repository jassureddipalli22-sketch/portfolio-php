<?php
$conn = new mysqli("localhost", "root", "", "portfolio_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Thanks! Your message was sent.</h2>";
    echo "<a href='index.php'>Go back to portfolio</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
<?php
$conn = new mysqli("localhost", "root", "", "portfolio_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($email) || empty($message)){
    echo "<h2>Please fill all fields</h2>";
    echo "<a href='index.php#contact'>Go back</a>";
    exit();
}

$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<style>
            body { font-family: Arial; text-align: center; padding: 50px; background: #f4f4f4; }
            .success { background: white; padding: 30px; border-radius: 10px; display: inline-block; box-shadow: 0 2px 10px rgba(0,0,0,0.1);}
            h2 { color: #28a745; }
          </style>";
    echo "<div class='success'>";
    echo "<h2>Thanks, $name!</h2>";
    echo "<p>Your message was sent successfully.</p>";
    echo "<p>Redirecting back...</p>";
    echo "</div>";
    header("refresh:2;url=index.php"); // Redirect after 2 sec
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>