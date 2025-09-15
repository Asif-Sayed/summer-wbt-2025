<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize message
$message = "";

// Get product ID from URL
if (!isset($_GET['id'])) {
    die("Product ID is required.");
}
$id = (int)$_GET['id'];

// Fetch existing product data
$stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Product not found.");
}

$product = $result->fetch_assoc();
$stmt->close();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        // Delete the product
        $stmt = $conn->prepare("DELETE FROM products WHERE id=?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            $message = "Product deleted successfully!";
            $stmt->close();
            // Redirect to display page after deletion
            header("Location: display.php");
            exit();
        } else {
            $message = "Error deleting product: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h2>EDIT PRODUCT</h2>

    <?php if (!empty($message)) echo "<p><b>$message</b></p>"; ?>

    <form method="post" action="">
        <p><b>Name:</b> <?php echo htmlspecialchars($product['product_name']); ?></p>
        <p><b>Buying Price:</b> <?php echo number_format($product['buying_price'], 2); ?></p>
        <p><b>Selling Price:</b> <?php echo number_format($product['selling_price'], 2); ?></p>
        <p><b>Displayable:</b> <?php echo $product['display'] == 'Yes' ? 'Yes' : 'No'; ?></p>

        <input type="submit" name="delete" value="DELETE">
    </form>
</body>
</html>