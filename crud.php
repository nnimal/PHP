<?php
// Database connection
$host = 'localhost';
$dbname = 'test_db';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Create
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone]);

    echo "User created successfully!";
}

// Read
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id, 'name' => $name, 'email' => $email, 'phone' => $phone]);

    echo "User updated successfully!";
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => $id]);

    echo "User deleted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD in PHP</title>
</head>
<body>
    <h1>CRUD in PHP</h1>

    <!-- Create Form -->
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone">
        <button type="submit" name="create">Create</button>
    </form>

    <!-- Update Form -->
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <input type="text" name="name" placeholder="Name" value="<?php echo $user['name']; ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?php echo $user['email']; ?>" required>
        <input type="text" name="phone" placeholder="Phone" value="<?php echo $user['phone']; ?>">
        <button type="submit" name="update">Update</button>
    </form>

    <!-- Users List -->
    <h2>Users List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td>
                <a href="index.php?delete=<?php echo $user['id']; ?>">Delete</a>
                <a href="index.php?edit=<?php echo $user['id']; ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>