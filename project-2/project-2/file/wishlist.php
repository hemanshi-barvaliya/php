<?php

include_once 'header.php';  

if (!isset($_SESSION['user_id'])) {
    echo "Please login first to view your wishlist.";
    exit;
}

$user_id = $_SESSION['user_id'];


$sql = "SELECT p.id, p.name, p.image, p.discount 
        FROM wishlist w 
        JOIN product p ON w.product_id = p.id 
        WHERE w.user_id = '$user_id'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<h2>Your wishlist is empty.</h2>";
    exit;
}

echo "<h1>Your Wishlist</h1>";
echo "<div style='display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;'>"; 

$total_amount = 0;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div style='text-align: center; padding: 10px;'>";
    echo "<img src='../admin/image/{$row['image']}' style='height: 200px; width: 260px;'><br>";
    echo "<h3>{$row['name']}</h3>";
    echo "<p>\${$row['discount']}</p>";

    $total_amount += $row['discount'];


    echo "<form method='post' style='display:inline-block;'>
            <input type='hidden' name='product_id' value='{$row['id']}'>
            <button type='submit' name='add_to_cart' class='btn btn-primary'>Add to Cart</button>
          </form>";

  
    echo "<form method='post' style='display:inline-block;'>
            <input type='hidden' name='remove_id' value='{$row['id']}'>
            <button type='submit' name='remove_item' class='btn btn-light'>Remove</button>
          </form>";

    echo "</div>";
}
echo "</div>";


if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];

 
    $check_cart = "SELECT * FROM cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
    $check_result = mysqli_query($con, $check_cart);
    if (mysqli_num_rows($check_result) == 0) {
        $insert_cart = "INSERT INTO cart (user_id, product_id) VALUES ('$user_id', '$product_id')";
        mysqli_query($con, $insert_cart);
    }


    $delete_sql = "DELETE FROM wishlist WHERE user_id = '$user_id' AND product_id = '$product_id'";
    mysqli_query($con, $delete_sql);

    header("Location: wishlist.php"); 
    exit;
}


if (isset($_POST['remove_item'])) {
    $remove_id = $_POST['remove_id'];
    $delete_sql = "DELETE FROM wishlist WHERE user_id = '$user_id' AND product_id = '$remove_id'";
    mysqli_query($con, $delete_sql);

    header("Location: wishlist.php");
    exit;
}
?>


<form method="post">
    <button type="submit" name="clear_wishlist" class="btn btn-light btn-ecomm">Clear Wishlist</button>
</form>

<?php

if (isset($_POST['clear_wishlist'])) {
    $clear_sql = "DELETE FROM wishlist WHERE user_id = '$user_id'";
    mysqli_query($con, $clear_sql);

    header("Location: wishlist.php");
    exit;
}
?>
