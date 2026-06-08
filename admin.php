<?php
$conn = new mysqli("localhost", "root", "", "portfolio_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete message if requested
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM messages WHERE id=$id");
    header("Location: admin.php");
}

$result = $conn->query("SELECT * FROM messages ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Messages</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        table { width: 100%; background: white; border-collapse: collapse; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #007bff; color: white; }
        .delete { color: red; text-decoration: none; }
        h1 { color: #333; }
    </style>
</head>
<body>
    <h1>Contact Form Messages</h1>
    <a href="index.php">← Back to Portfolio</a><br><br>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><a class="delete" href="admin.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this message?')">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>