<?php
// Database connection
$servername = "localhost";
$username = "root"; // change if needed
$password = "";     // change if needed
$dbname = "product_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch only products with display = Yes
$sql = "SELECT id, product_name, buying_price, selling_price 
        FROM products WHERE display='Yes'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            background: #f9f9f9;
        }
        th, td {
            border: 1px solid #555;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">DISPLAY</h2>
    <table>
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th>Action</th>
        </tr>
        <?php if ($result->num_rows > 0) { 
            while ($row = $result->fetch_assoc()) {
                $profit = $row['selling_price'] - $row['buying_price'];
        ?>
        <tr>
            <td><?= $row['product_name']; ?></td>
            <td><?= $profit; ?></td>
            <td>
                <a href="editProduct.php?id=<?= $row['id']; ?>">edit</a> | 
                <a href="deleteProduct.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')">delete</a>
            </td>
        </tr>
        <?php } } else { ?>
            <tr><td colspan="3">No products to display</td></tr>
        <?php } ?>
    </table>
</body>
</html>
