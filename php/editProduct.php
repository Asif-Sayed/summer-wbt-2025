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
    $product_name  = $_POST['product_name'];
    $buying_price  = $_POST['buying_price'];
    $selling_price = $_POST['selling_price'];
    $display       = isset($_POST['display']) ? 'Yes' : 'No';

    $stmt = $conn->prepare("UPDATE products SET product_name=?, buying_price=?, selling_price=?, display=? WHERE id=?");
    $stmt->bind_param("sddsi", $product_name, $buying_price, $selling_price, $display, $id);

    if ($stmt->execute()) {
        $message = " Product updated successfully!";
        // Refresh product data
        $product['product_name'] = $product_name;
        $product['buying_price'] = $buying_price;
        $product['selling_price'] = $selling_price;
        $product['display'] = $display;
    } else {
        $message = " Error: " . $stmt->error;
    }
    $stmt->close();
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
        <label>Name</label><br>
        <input type="text" name="product_name" value="<?php echo htmlspecialchars($product['product_name']); ?>" required><br><br>

        <label>Buying Price</label><br>
        <input type="number" step="0.01" name="buying_price" value="<?php echo $product['buying_price']; ?>" required><br><br>

        <label>Selling Price</label><br>
        <input type="number" step="0.01" name="selling_price" value="<?php echo $product['selling_price']; ?>" required><br><br>

        <input type="checkbox" name="display" value="Yes" <?php if($product['display'] == 'Yes') echo "checked"; ?>>
        <label>Display</label><br><br>

        <input type="submit" value="SAVE">
    </form>
</body>
</html>