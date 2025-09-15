<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists (run only once)
$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    buying_price DECIMAL(10,2) NOT NULL,
    selling_price DECIMAL(10,2) NOT NULL,
    display ENUM('Yes','No') NOT NULL
)";
$conn->query($sql);

$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name  = $_POST['product_name'];
    $buying_price  = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display       = isset($_POST['display']) ? 'Yes' : 'No'; // checkbox

    // Prepared statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO products (product_name, buying_price, selling_price, display) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdds", $product_name, $buying_price, $selling_price, $display);

    if ($stmt->execute()) {
        $message = "✅ New product added successfully!";
    } else {
        $message = "❌ Error: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>

    <?php if (!empty($message)) echo "<p><b>$message</b></p>"; ?>

    <form method="post" action="">
        <label>Product Name:</label>
        <input type="text" name="product_name" required><br><br>

        <label>Buying Price:</label>
        <input type="number" step="0.01" name="buying_price" required><br><br>

        <label>Selling Price:</label>
        <input type="number" step="0.01" name="selling_price" required><br><br>

        <input type="checkbox" name="display" value="Yes"> 
        <label>Display</label><br><br>

        <input type="submit" value="Save">
    </form>
</body>
</html>