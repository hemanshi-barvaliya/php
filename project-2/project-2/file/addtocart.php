<?php

include_once 'header.php';  

if (!isset($_SESSION['user_id'])) {
    echo "Please login to view your cart.";
    exit;
}

$user_id = $_SESSION['user_id'];

$query = "SELECT p.id, p.name, p.image, p.discount 
          FROM cart c 
          JOIN product p ON c.product_id = p.id 
          WHERE c.user_id = '$user_id'";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) == 0) {
    echo "<h2>Your cart is empty.</h2>";
    exit;
}

echo "<h1>Your Cart</h1>";
echo "<div style='display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;'>"; 

$total = 0;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div style='text-align: center; padding: 10px;'>";
    echo "<img src='../admin/image/{$row['image']}' style='height: 200px; width: 260px;'><br>";
    echo "<h3>{$row['name']}</h3>";
    echo "<p>\${$row['discount']}</p>";
    $total += $row['discount'];

    // Remove item from cart button
    echo "<form method='post' style='display:inline-block;'>
            <input type='hidden' name='remove_id' value='{$row['id']}'>
            <button type='submit' name='remove_item' class='btn btn-light'>Remove</button>
          </form>";

    echo "</div>";
}
echo "</div>";
echo "<h3>Total: \$$total</h3>";


if (isset($_POST['remove_item'])) {
    $remove_id = $_POST['remove_id'];
    $delete_sql = "DELETE FROM cart WHERE user_id = '$user_id' AND product_id = '$remove_id'";
    mysqli_query($con, $delete_sql);

    header("Location: addtocart.php");
    exit;
}

if (isset($_POST['clear_cart'])) {
    $clear_sql = "DELETE FROM cart WHERE user_id = '$user_id'";
    mysqli_query($con, $clear_sql);

    header("Location: addtocart.php");
    exit;
}
?>


<form method="post">
    <button type="submit" name="clear_cart" class="btn btn-light btn-ecomm">Clear Cart</button>
</form>
