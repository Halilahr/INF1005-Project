<html>
    <head>
        <title>Shopping Cart</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
 
    <?php
        include "link.inc.php";
    ?>
    
    <body>
        <?php
            include "nav.inc.php";
        ?>
</html>
<?php
session_start(); // Start session to store cart items
$items = array();
$total = 0;

// Check if there are items in the cart and retrieve them from session
if (isset($_SESSION["cart"])) {
  $items = $_SESSION["cart"];
  
  // Calculate the total price of the items in the cart
  foreach ($items as $item) {
    $total += $item["price"] * $item["quantity"];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cheesecake Shop - Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
  
  <main>
    <?php if (count($items) == 0): ?>
      <div id="recommendations">
        <p>Your cart is currently empty. Why not try our delicious cheesecakes?</p>
        <a href="products.php">Shop now</a>
      </div>
    <?php else: ?>
      <table id="cart">
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($items as $index => $item): ?>
            <tr>
              <td><?php echo $item["name"]; ?></td>
              <td>$<?php echo number_format($item["price"], 2); ?></td>
              <td><input type="number" min="1" value="<?php echo $item["quantity"]; ?>" onchange="updateQuantity(<?php echo $index; ?>, this.value)"></td>
              <td>$<?php echo number_format($item["price"] * $item["quantity"], 2); ?></td>
              <td><button onclick="removeItem(<?php echo $index; ?>)">Remove</button></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3">Total:</td>
            <td>$<?php echo number_format($total, 2); ?></td>
            <td><button onclick="clearCart()">Clear Cart</button></td>
          </tr>
        </tfoot>
      </table>
    <?php endif; ?>
  </main>
  
  <script src="cartScript.js"></script>
</body>
</html>
